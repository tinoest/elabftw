<?php
/**
 * inc/viewXP.php
 *
 * @author Nicolas CARPi <nicolas.carpi@curie.fr>
 * @copyright 2012 Nicolas CARPi
 * @see http://www.elabftw.net Official website
 * @license AGPL-3.0
 */
use \Elabftw\Elabftw\Tools as Tools;

// read only ?
$ro = false;
// ID
if (isset($_GET['id']) && !empty($_GET['id']) && is_pos_int($_GET['id'])) {
    $id = $_GET['id'];
} else {
    display_message('error', _("The id parameter is not valid!"));
    require_once 'inc/footer.php';
    exit;
}

// SQL for viewXP
$sql = "SELECT experiments.id AS expid,
    experiments.*,
    status.color,
    status.name
    FROM experiments
    LEFT JOIN status ON (experiments.status = status.id)
    WHERE experiments.id = :id";
$req = $pdo->prepare($sql);
$req->bindParam(':id', $id, PDO::PARAM_INT);
$req->execute();
// got results ?
$row_count = $req->rowCount();
if ($row_count === 0) {
    $message = 'Nothing to show with this ID.';
    display_message('error', $message);
    require_once 'inc/footer.php';
    die();
}

$data = $req->fetch();

// if visibility of experiment is an int, it is a team_groups
// so we want to display the name of the group
if (is_pos_int($data['visibility'])) {
    $sql = "SELECT name FROM team_groups WHERE id = :id";
    $visreq = $pdo->prepare($sql);
    $visreq->bindParam(':id', $data['visibility']);
    $visreq->execute();
    $visibility = $visreq->fetchColumn();
} else {
    $visibility = $data['visibility'];
}


// Check id is owned by connected user to show read only message if not
if ($data['userid'] != $_SESSION['userid']) {
    // Can the user see this experiment which is not his ?
    if ($data['visibility'] == 'user') {
        display_message('error', _("<strong>Access forbidden:</strong> the visibility setting of this experiment is set to 'owner only'."));
        require_once 'inc/footer.php';
        exit;
    } elseif (is_pos_int($data['visibility'])) {
        // the visibility of this experiment is set to a group
        // we must check if current user is in this group
        $sql = "SELECT DISTINCT userid FROM users2team_groups WHERE groupid = :groupid";
        $team_group_req = $pdo->prepare($sql);
        $team_group_req->bindParam(':groupid', $data['visibility']);
        $team_group_req->execute();
        $auth_users_arr = array();
        while ($auth_users = $team_group_req->fetch()) {
            $auth_users_arr[] = $auth_users['userid'];
        }
        if (!in_array($_SESSION['userid'], $auth_users_arr)) {
            display_message('error', _("<strong>Access forbidden:</strong> you don't have the rights to access this."));
            require_once 'inc/footer.php';
            exit;
        }

    } else {
        // get who owns the experiment
        $sql = 'SELECT firstname, lastname, team FROM users WHERE userid = :userid';
        $get_owner = $pdo->prepare($sql);
        $get_owner->bindParam(':userid', $data['userid']);
        $get_owner->execute();
        $owner = $get_owner->fetch();
        if ($owner['team'] != $_SESSION['team_id']) {
            // the experiment needs to be organization for us to see it as we are not in the team of the owner
            if ($data['visibility'] != 'organization') {
                display_message('error', _("<strong>Access forbidden:</strong> you don't have the rights to access this."));
                require_once 'inc/footer.php';
                exit;
            }
        }
        $message = _('<strong>Read-only mode:</strong> this experiment is owned by') . ' ' . $owner['firstname'] . ' ' . $owner['lastname'] . '.';
        display_message('info', $message);
        // we set this variable for later, to check if we are in read only mode
        $ro = true;
    }
}


// SHOW INFO ON TIMESTAMP
if ($data['timestamped'] == 1) {
    // who what when ?
    $sql = 'SELECT firstname, lastname FROM users WHERE userid = :userid';
    $req_stamper = $pdo->prepare($sql);
    $req_stamper->bindParam(':userid', $data['timestampedby']);
    $req_stamper->execute();
    $timestamper = $req_stamper->fetch();

    // display timestamped pdf download link
    $sql = "SELECT * FROM uploads WHERE type = 'exp-pdf-timestamp' AND item_id = :item_id LIMIT 1";
    $req_stamper = $pdo->prepare($sql);
    $req_stamper->bindParam(':item_id', $id);
    $req_stamper->execute();
    $uploads = $req_stamper->fetch();

    $date = new DateTime($data['timestampedwhen']);

    display_message(
        'info_nocross',
        _('Experiment was timestamped by') . " " . $timestamper['firstname'] . " " . $timestamper['lastname'] . " " . _('on') . " " . $date->format('Y-m-d') . " " . _('at') . " " . $date->format('H:i:s') . " "
        . $date->getTimezone()->getName() . " <a href='uploads/" . $uploads['long_name'] . "'><img src='img/pdf.png' class='bot5px' title='" . _('Download timestamped pdf') . "' alt='pdf' /></a>"
    );

    unset($timestamper);
    unset($uploads);
}
// Display experiment
?>
    <section class="item" style='padding:15px;border-left: 6px solid #<?php echo $data['color']; ?>'>
    <span class='top_right_status'><img src='img/status.png'><?php echo $data['name']; ?><img src='img/eye.png' alt='eye' /><?php echo $visibility; ?></span>
<?php
echo "<span class='date_view'><img src='img/calendar.png' class='bot5px' title='date' alt='Date :' /> " . Tools::formatDate((string)$data['date']) . "</span><br />
    <a href='experiments.php?mode=edit&id=".$data['expid'] . "'><img src='img/pen-blue.png' title='edit' alt='edit' /></a>
<a href='app/duplicate_item.php?id=".$data['expid'] . "&type=exp'><img src='img/duplicate.png' title='duplicate experiment' alt='duplicate' /></a>
<a href='make.php?what=pdf&id=".$data['expid'] . "&type=experiments'><img src='img/pdf.png' title='make a pdf' alt='pdf' /></a>
<a href='make.php?what=zip&id=".$data['expid'] . "&type=experiments'><img src='img/zip.png' title='make a zip archive' alt='zip' /></a> ";
// lock
if ($data['locked'] == 0) {
    echo "<a href='app/lock.php?id=" . $data['expid'] . "&action=lock&type=experiments'><img src='img/unlock.png' title='lock experiment' alt='lock' /></a>";
} else { // experiment is locked
    echo "<a href='app/lock.php?id=" . $data['expid'] . "&action=unlock&type=experiments'><img src='img/lock-gray.png' title='unlock experiment' alt='unlock' /></a>";
    // show timestamp button if it's not timestamped already
    if ($data['timestamped'] == 0) {
        echo "<a onClick=\"return confirmStamp()\" href='app/timestamp.php?id=" . $data['expid'] . "'><img src='img/stamp.png' title='timestamp experiment' alt='timestamp' /></a>";
    }
}

// TAGS
show_tags($id, 'experiments_tags');
// TITLE : click on it to go to edit mode only if we are not in read only mode
echo "<div ";
if ($ro === false && $data['locked'] == 0) {
    echo "OnClick=\"document.location='experiments.php?mode=edit&id=" . $data['expid'] . "'\"";
}
echo " class='title_view'>";
echo stripslashes($data['title']) . "</div>";
// BODY (show only if not empty, click on it to edit
if ($data['body'] != '') {
    echo "<div id='body_view' ";
    // make the body clickable only if we are not in read only
    if ($ro === false && $data['locked'] == 0) {
        echo "OnClick=\"document.location='experiments.php?mode=edit&id=" . $data['expid'] . "'\"";
    }
    echo "class='txt'>" . stripslashes($data['body']) . "</div>";
    echo "<br>";
}


// DISPLAY LINKED ITEMS
$sql = "SELECT items.id AS itemid,
    experiments_links.id AS linkid,
    experiments_links.*,
    items.*,
    items_types.*
    FROM experiments_links
    LEFT JOIN items ON (experiments_links.link_id = items.id)
    LEFT JOIN items_types ON (items.type = items_types.id)
    WHERE experiments_links.item_id = :id";
$req = $pdo->prepare($sql);
$req->execute(array(
    'id' => $id
));
// Check there is at least one link to display
if ($req->rowcount() > 0) {
    while ($link = $req->fetch()) {
        // SQL to get title
        echo "<img src='img/link.png'> [" . $link['name'] . "] - <a href='database.php?mode=view&id=" . $link['itemid'] . "'>" .
            stripslashes($link['title']) . "</a><br>";
    } // end while
}


// DISPLAY eLabID
echo "<p class='elabid'>" . _('Unique eLabID:') . " " . $data['elabid'];
echo "</section>";
// DISPLAY FILES
require_once 'inc/display_file.php';

// COMMENT BOX
?>
<!-- we need to add a container here so the reload function in the callback of .editable() doesn't mess things up -->
<section id='expcomment_container'>
<div id='expcomment' class='box'>
    <h3><img src='img/comment.png' alt='comment' /> <?php echo _('Comments'); ?></h3>
    <p class='editable newexpcomment' id='newexpcomment_<?php echo $id; ?>'><?php echo _('Add a comment'); ?></p>
<?php

// check if there is something to display first
// get all comments, and infos on the commenter associated with this experiment
$sql = "SELECT * FROM experiments_comments LEFT JOIN users ON (experiments_comments.userid = users.userid) WHERE exp_id = :id ORDER BY experiments_comments.datetime DESC";
$req = $pdo->prepare($sql);
$req->execute(array(
    'id' => $id
));
if ($req->rowCount() > 0) {
    // there is comments to display
    while ($comments = $req->fetch()) {
        if (empty($comments['firstname'])) {
            $comments['firstname'] = '[deleted]';
        }
    echo "<div class='expcomment_box'>
    <img class='align_right' src='img/small-trash.png' title='delete' alt='delete' onClick=\"deleteThisAndReload(".$comments['id'] . ",'expcomment')\" />";
        echo "<span class='smallgray'>On " . $comments['datetime'] . " " . $comments['firstname'] . " " . $comments['lastname'] . " wrote :</span><br />";
        echo "<p class='editable' id='expcomment_" . $comments['id'] . "'>" . $comments['comment'] . "</p></div>";
    }
}
?>
</div>
</section>

<script>
// DELETE EXP COMMENT
function deleteThisAndReload(id, type) {
    var you_sure = confirm('<?php echo _('Delete this?'); ?>');
    if (you_sure == true) {
        $.post('app/delete.php', {
            id:id,
            type:type
        })
        // on success we reload the block
        .success(function() {
             $('#expcomment_container').load("experiments.php?mode=view&id=<?php echo $id; ?> #expcomment");
        });
    } else {
        return false;
    }
}

function makeEditable() {
    // Experiment comment is editable
    $('div#expcomment').on("mouseover", ".editable", function(){
        $('div#expcomment p.editable').editable('app/editinplace.php', {
            tooltip : 'Click to edit',
                indicator : '<?php echo _('Saving'); ?>',
            id   : 'id',
            name : 'expcomment',
            submit : '<?php echo _('Save'); ?>',
            cancel : '<?php echo _('Cancel'); ?>',
            style : 'display:inline',
            callback : function() {
                // now we reload the comments part to show the comment we just submitted
                $('#expcomment_container').load("experiments.php?mode=view&id=<?php echo $id; ?> #expcomment");
                // we reload the function so editable zones are editable again
                makeEditable();
            }
        })
    });
}


// READY ? GO !!

function confirmStamp() {
    var you_sure = confirm('<?php echo _('Once timestamped an experiment cannot be edited anymore ! Are you sure you want to do this ?'); ?>');
    if (you_sure === true) {
        return true;
    } else {

        return false;
    }
}
$(document).ready(function() {
    // change title
    // fix for the ' and "
    title = "<?php echo $data['title']; ?>".replace(/\&#39;/g, "'").replace(/\&#34;/g, "\"");
    document.title = title;
    // Keyboard shortcuts
    key('<?php echo $_SESSION['prefs']['shortcuts']['create']; ?>', function(){location.href = 'app/create_item.php?type=exp'});
    key('<?php echo $_SESSION['prefs']['shortcuts']['edit']; ?>', function(){location.href = 'experiments.php?mode=edit&id=<?php echo $id; ?>'});
    // make editable
    setInterval(makeEditable, 50);
});
</script>
