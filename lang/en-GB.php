<?php
/********************************************************************************
*                                                                               *
*   Copyright 2012 Nicolas CARPi (nicolas.carpi@gmail.com)                      *
*   http://www.elabftw.net/                                                     *
*                                                                               *
********************************************************************************/

/********************************************************************************
*  This file is part of eLabFTW.                                                *
*                                                                               *
*    eLabFTW is free software: you can redistribute it and/or modify            *
*    it under the terms of the GNU Affero General Public License as             *
*    published by the Free Software Foundation, either version 3 of             *
*    the License, or (at your option) any later version.                        *
*                                                                               *
*    eLabFTW is distributed in the hope that it will be useful,                 *
*    but WITHOUT ANY WARRANTY; without even the implied                         *
*    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR                    *
*    PURPOSE.  See the GNU Affero General Public License for more details.      *
*                                                                               *
*    You should have received a copy of the GNU Affero General Public           *
*    License along with eLabFTW.  If not, see <http://www.gnu.org/licenses/>.   *
*                                                                               *
********************************************************************************/
// GENERAL
define("YES", "Yes");
define("NO", "No");
define("CONFIG_UPDATE_OK", "Configuration updated successfully.");
define("ERROR_BUG", "There was a unexpected problem! Please <a href='https://github.com/NicolasCARPi/elabftw/issues/'>open an issue on GitHub</a> if you think this is a bug.");
define("INVALID_ID", "The id parameter is not valid!");
define("INVALID_USERID", "Userid is not valid.");
define("INVALID_TYPE", "The type parameter is not valid!");
define("INVALID_FORMKEY", "The form key is invalid. Please retry.");
define("INVALID_EMAIL", "The email is not invalid.");
define("INVALID_PASSWORD", "Wrong password!");
define("INVALID_USER", "No user with this email or user not in your team");
define("PASSWORDS_DONT_MATCH", "The passwords do not match!");
define("PASSWORD_TOO_SHORT", "Password must contain at least 8 characters.");
define("NEED_TITLE", "You need to put a title!");
define("NEED_PASSWORD", "You need to put a password!");
define("FIELD_MISSING", "A mandatory field is missing!");
define("NO_ACCESS_DIE", "This section is out of your reach.");

define("USERNAME", "Username");
define("PASSWORD", "Password");
define("FIRSTNAME", "Firstname");
define("LASTNAME", "Lastname");
define("EMAIL", "Email");
define("TEAM", "Team");

define("DATE", "Date");
define("TITLE", "Title");
define("INFOS", "Infos");
define("VISIBILITY", "Visibility");
define("STATUS", "Status");

define("EDIT", "Edit");
define("SAVE", "Save");
define("SAVED", "Saved!");
define("CANCEL", "Cancel");
define("SAVING", "Saving");
define("SAVE_AND_BACK", "Save and go back");
define("UPDATED", "Updated!");

define("ACTION", "Action");
define("SHORTCUT", "Shortcut");
define("CREATE", "Create");
define("SUBMIT", "Submit");
define("TODO", "TODO list");

define("NAME", "Name");
define("PHONE", "Phone");
define("MOBILE", "Mobile");
define("WEBSITE", "Website");
define("SKYPE", "Skype");

// EMAILS
define("EMAIL_NEW_USER_SUBJECT", "[eLabFTW] New user registered");
define("EMAIL_NEW_USER_BODY_1", "Hi,
    Your account on eLabFTW has been activated. You can now login :");
define("EMAIL_SEND_ERROR", "There was a problem sending the email! Error was logged.");
define("EMAIL_SUCCESS", "Email sent. Check your INBOX.");
define("EMAIL_FOOTER", "

~~~
Email sent by eLabFTW
http://www.elabftw.net
Free open-source Lab Manager");

// ADMIN.PHP
define("ADMIN_TITLE", "Admin panel");

define("ADMIN_VALIDATION_QUEUE", "There are users waiting for validation of their account:");
define("ADMIN_VALIDATION_QUEUE_SUBMIT", "Validate user(s)");

define("ADMIN_MENU_TEAM", "Team");
define("ADMIN_MENU_USERS", "Users");
define("ADMIN_MENU_ITEMSTYPES", "Types of items");
define("ADMIN_MENU_EXPTPL", "Experiments template");
define("ADMIN_MENU_CSV", "Import CSV");

define("ADMIN_TEAM_H3", "Configure your team");
define("ADMIN_TEAM_DELETABLE_XP", "Users can delete experiments:");
define("ADMIN_TEAM_LINK_NAME", "Name of the link in the top menu:");
define("ADMIN_TEAM_LINK_HREF", "Address where this link should point:");
define("ADMIN_TEAM_STAMPLOGIN", "Login for external timestamping service:");
define("ADMIN_TEAM_STAMPLOGIN_HELP", "This should be the email address associated with your account on Universign.com.");
define("ADMIN_TEAM_STAMPPASS", "Password for external timestamping service:");
define("ADMIN_TEAM_STAMPPASS_HELP", "Your Universign password");

define("ADMIN_USERS_H3", "Edit users");
define("ADMIN_USERS_VALIDATED", "Has an active account?");
define("ADMIN_USERS_GROUP", "Group:");
define("ADMIN_USERS_RESET_PASSWORD", "Reset user password:");
define("ADMIN_USERS_REPEAT_PASSWORD", "Repeat new password:");
define("ADMIN_USERS_BUTTON", "Edit this user");

define("ADMIN_DELETE_USER_H3", "DANGER ZONE");
define("ADMIN_DELETE_USER_H4", "Delete an account");
define("ADMIN_DELETE_USER_HELP", "Type EMAIL ADDRESS of a member to delete this user and all his experiments/files forever:");
define("ADMIN_DELETE_USER_CONFPASS", "Type your password:");
define("ADMIN_DELETE_USER_BUTTON", "Delete this user!");

define("ADMIN_STATUS_ADD_H3", "Add a new status");
define("ADMIN_STATUS_ADD_NEW", "New status name:");
define("ADMIN_STATUS_ADD_BUTTON", "Add new status");
define("ADMIN_STATUS_EDIT_H3", "Edit an existing status");
define("ADMIN_STATUS_EDIT_ALERT", "Remove all experiments with this status before deleting this status.");
define("ADMIN_STATUS_EDIT_DEFAULT", "Make default");

define("ADMIN_ITEMS_TYPES_H3", "Database items types");
define("ADMIN_ITEMS_TYPES_ALERT", "Remove all database items with this type before deleting this type.");
define("ADMIN_ITEMS_TYPES_EDIT_NAME", "Edit the name:");
define("ADMIN_ITEMS_TYPES_ADD", "Add a new type of item:");
define("ADMIN_ITEMS_TYPES_ADD_BUTTON", "Add new item type");

define("ADMIN_EXPERIMENT_TEMPLATE_H3", "Common experiment template");
define("ADMIN_EXPERIMENT_TEMPLATE_HELP", "This is the default text when someone creates an experiment.");

define("ADMIN_IMPORT_CSV_H3", "Import a CSV file");
define("ADMIN_IMPORT_CSV_HELP", "This page will allow you to import a .csv (Excel spreadsheet) file into the database.<br>First you need to open your (.xls/.xlsx) file in Excel or Libreoffice and save it as .csv.<br>In order to have a good import, the first column should be the title. The rest of the columns will be imported in the body. You can make a tiny import of 3 lines to see if everything works before you import a big file.");
define("ADMIN_IMPORT_CSV_HELP_STRONG", "You should make a backup of your database before importing thousands of items!");
define("ADMIN_IMPORT_CSV_STEP_1", "1. Select a type of item to import to:");
define("ADMIN_IMPORT_CSV_STEP_2", "2. Select a CSV file to import:");
define("ADMIN_IMPORT_CSV_BUTTON", "Import CSV");
define("ADMIN_IMPORT_CSV_MSG", "items were imported successfully.");

// ADMIN-EXEC.PHP
define("ADMIN_USER_VALIDATED", "Validated user with ID :");
define("ADMIN_TEAM_ADDED", "Team added successfully.");
define("SYSADMIN_GRANT_SYSADMIN", "Only a sysadmin can put someone sysadmin.");
define("USER_DELETED", "Everything was purged successfully.");

// CHANGE-PASS.PHP
define("CHANGE_PASS_TITLE", "Reset password");
define("CHANGE_PASS_PASSWORD", "New password");
define("CHANGE_PASS_REPEAT_PASSWORD", "Type it again");
define("CHANGE_PASS_HELP", "8 characters minimum");
define("CHANGE_PASS_COMPLEXITY", "Complexity");
define("CHANGE_PASS_BUTTON", "Save new password");
// this is in JS code, so probably not a good idea to put ' or "
define("CHANGE_PASS_WEAK", "Weak password");
define("CHANGE_PASS_AVERAGE", "Average password");
define("CHANGE_PASS_GOOD", "Good password");
define("CHANGE_PASS_STRONG", "Strong password");
define("CHANGE_PASS_NO_WAY", "No way that is your real password!");

// CHECK_FOR_UPDATES.PHP
define("CHK_UPDATE_GIT", "Install git to check for updates.");
define("CHK_UPDATE_CURL", "You need to install the curl extension for php.");
define("CHK_UPDATE_UNKNOWN", "Unknown branch!");
define("CHK_UPDATE_GITHUB", "Couldn't connect to github.com to check for updates.");
define("CHK_UPDATE_NEW", "A new update is available!");
define("CHK_UPDATE_MASTER", "Congratulations! You are running the latest stable version of eLabFTW :)");
define("CHK_UPDATE_NEXT", "Congratulations! You are running the latest development version of eLabFTW :)");

// CREATE_ITEM.PHP
define("CREATE_ITEM_WRONG_TYPE", "Wrong item type!");
define("CREATE_ITEM_UNTITLED", "Untitled");
define("CREATE_ITEM_SUCCESS", "New item created successfully.");

// DATABASE.PHP
define("DATABASE_TITLE", "Database");

// DELETE_FILE.PHP
define("DELETE_FILE_FILE", "File");
define("DELETE_FILE_DELETED", "deleted successfully");

// DELETE.PHP
define("DELETE_NO_RIGHTS", "You don't have the rights to delete this experiment.");
define("DELETE_EXP_SUCCESS", "Experiment was deleted successfully.");
define("DELETE_TPL_SUCCESS", "Template was deleted successfully.");
define("DELETE_ITEM_SUCCESS", "Item was deleted successfully.");
define("DELETE_ITEM_TYPE_SUCCESS", "Item type was deleted successfully.");
define("DELETE_STATUS_SUCCESS", "Status was deleted successfully.");

// DUPLICATE_ITEM.PHP
define("DUPLICATE_EXP_SUCCESS", "Experiment successfully duplicated.");
define("DUPLICATE_ITEM_SUCCESS", "Database entry successfully duplicated.");

// EXPERIMENTS.PHP
define("EXPERIMENTS_TITLE", "Experiments");

// LOCK.PHP
define("LOCK_NO_RIGHTS", "You don't have the rights to lock/unlock this.");
define("LOCK_LOCKED_BY", "This experiment was locked by");
define("LOCK_NO_EDIT", "You cannot unlock or edit in any way a timestamped experiment.");

// LOGIN-EXEC.PHP
define("LOGIN_FAILED", "Login failed. Either you mistyped your password, or your account isn't activated yet.");

// LOGIN.PHP
define("LOGIN", "Login");
define("LOGIN_TOO_MUCH_FAILED", "You cannot login now because of too much failed login attempts.");
define("LOGIN_ATTEMPT_NB", "Number of login attempt left before being banned for");
define("LOGIN_MINUTES", "minutes:");
// in JS code
define("LOGIN_ENABLE_COOKIES", "Please enable cookies in your navigator to continue.");
define("LOGIN_COOKIES_NOTE", "Note: you need cookies enabled to log in.");
define("LOGIN_H2", "Sign in to your account");
define("LOGIN_FOOTER", "Don't have an account ? <a href='register.php'>Register</a> now!<br>Lost your password? <a href='#' class='trigger'>Reset</a> it !");
define("LOGIN_FOOTER_PLACEHOLDER", "Enter your email address");
define("LOGIN_FOOTER_BUTTON", "Send new password");

// MAKE_CSV.PHP
define("CSV_TITLE", "Export to spreadsheet");
define("CSV_READY", "Your CSV file is ready:");

// MAKE_ZIP.PHP
define("ZIP_TITLE", "Make zip archive");
define("ZIP_READY", "Your ZIP archive is ready:");

// PROFILE.PHP
define("PROFILE_TITLE", "Profile");
define("PROFILE_EXP_DONE", "experiments done since");

// REGISTER-EXEC.PHP
define("REGISTER_USERNAME_USED", "Username already in use!");
define("REGISTER_EMAIL_USED", "Someone is already using that email address!");
define("REGISTER_EMAIL_BODY", "Hi,
Someone registered a new account on eLabFTW. Head to the admin panel to activate the account!");
define("REGISTER_EMAIL_FAILED", "Could not send email to inform admin. Error was logged. Contact an admin directly to validate your account.");
define("REGISTER_SUCCESS_NEED_VALIDATION", "Registration successful :)<br>Your account must now be validated by an admin.<br>You will receive an email when it is done.");
define("REGISTER_SUCCESS", "Registration successful :)<br>Welcome to eLabFTW \o/");

// REGISTER.PHP
define("REGISTER_TITLE", "Register");
define("REGISTER_LOGOUT", "Please <a style='alert-link' href='logout.php'>logout</a> before you register another account.");
define("REGISTER_BACK_TO_LOGIN", "back to login page");
define("REGISTER_H2", "Create your account");
define("REGISTER_DROPLIST", "------ Select a team ------");
define("REGISTER_CONFIRM_PASSWORD", "Confirm password");
define("REGISTER_PASSWORD_COMPLEXITY", "Password complexity");
define("REGISTER_BUTTON", "create");

// RESET-EXEC.PHP
define("RESET_SUCCESS", "New password updated. You can now login.");

// RESET-PASS.PHP
define("RESET_MAIL_SUBJECT", "[eLabFTW] Password reset");
define("RESET_MAIL_BODY", "Hi,
Someone (probably you) with the IP address:"); 
define("RESET_MAIL_BODY2", "and the user agent:");
define("RESET_MAIL_BODY3", "requested a new password on eLabFTW.

Follow this link to change your password:");
define("RESET_NOT_FOUND", "Email not found in database!");

// REVISIONS.PHP
define("REVISIONS_TITLE", "Revisions");
define("REVISIONS_GO_BACK", "Go back to the experiment");
define("REVISIONS_LOCKED", "You cannot restore a revision of a locked experiment!");
define("REVISIONS_CURRENT", "Current:");
define("REVISIONS_SAVED", "Saved on:");
define("REVISIONS_RESTORE", "Restore");

// SEARCH.PHP
define("SEARCH", "Search");
define("SEARCH_TITLE", "Advanced Search");
define("SEARCH_BACK", "Back to experiments listing");
define("SEARCH_ONLY", "Search only in experiments owned by:");
define("SEARCH_YOU", "You");
define("SEARCH_EVERYONE", "search in everyone's experiments");
define("SEARCH_IN", "Search in");
define("SEARCH_DATE", "Where date is between");
define("SEARCH_AND", "and");
define("SEARCH_AND_TITLE", "And title contains");
define("SEARCH_AND_BODY", "And body contains");
define("SEARCH_AND_STATUS", "And status is");
define("SEARCH_SELECT_STATUS", "select status");
define("SEARCH_AND_RATING", "And rating is");
define("SEARCH_STARS", "select number of stars");
define("SEARCH_UNRATED", "Unrated");
define("SEARCH_BUTTON", "Launch search");
define("SEARCH_EXPORT", "Export this result:");
define("SEARCH_SORRY", "Sorry, I couldn't find anything :(");

// SYSCONFIG.PHP
define("SYSCONFIG_TITLE", "eLabFTW configuration");
define("SYSCONFIG_TEAMS", "Teams");
define("SYSCONFIG_SERVER", "Server");
define("SYSCONFIG_TIMESTAMP", "Timestamp");
define("SYSCONFIG_SECURITY", "Security");
define("SYSCONFIG_1_H3_1", "Add a new team");
define("SYSCONFIG_1_H3_2", "Edit existing teams");
define("SYSCONFIG_MEMBERS", "Members");
define("SYSCONFIG_ITEMS", "Items");
define("SYSCONFIG_CREATED", "Created");
define("SYSCONFIG_2_H3", "Under the hood");
define("SYSCONFIG_DEBUG", "Activate debug mode:");
define("SYSCONFIG_DEBUG_HELP", "When activated, content of \$_SESSION and \$_COOKIES array will be displayed in the footer for admins.");
define("SYSCONFIG_PROXY", "Address of the proxy:");
define("SYSCONFIG_PROXY_HELP", "If you are behind a firewall/proxy, enter the address here. Example : http://proxy.example.com:3128");
define("SYSCONFIG_PATH", "Full path to the install folder:");
define("SYSCONFIG_PATH_HELP", "This is actually the md5 hash of the path to the install. You probably don't need to change that except when you move an existing install.");
define("SYSCONFIG_3_H3", "Universign timestamping configuration");
define("SYSCONFIG_STAMPSHARE", "The teams can use the credentials below to timestamp:"); 
define("SYSCONFIG_STAMPSHARE_HELP", "You can control if the teams can use the global Universign account. If set to <em>no</em>, the team admin must add login infos in the admin panel.");
define("SYSCONFIG_STAMPLOGIN", "Login for external timestamping service:");
define("SYSCONFIG_STAMPLOGIN_HELP", "Must be an email address.");
define("SYSCONFIG_STAMPPASS", "Password for external timestamping service:");
define("SYSCONFIG_STAMPPASS_HELP", "This password will be stored in clear in the database ! Make sure it doesn't open other doors…");
define("SYSCONFIG_4_H3", "Security settings");
define("SYSCONFIG_ADMIN_VALIDATE", "Users need validation by admin after registration:");
define("SYSCONFIG_ADMIN_VALIDATE_HELP", "Set to yes for added security.");
define("SYSCONFIG_LOGIN_TRIES", "Number of allowed login attempts:");
define("SYSCONFIG_LOGIN_TRIES_HELP", "3 might be too few. See for yourself :)");
define("SYSCONFIG_BAN_TIME", "Time of the ban after failed login attempts (in minutes):");
define("SYSCONFIG_BAN_TIME_HELP", "To identify an user, we use an md5 of user agent + IP. Because doing it only based on IP address would surely cause problems.");
define("SYSCONFIG_5_H3", "SMTP settings");
define("SYSCONFIG_5_HELP", "Without a valid way to send emails, users won't be able to reset their password. It is recommended to create a specific Mandrill.com (or gmail) account, and add the infos here.");
define("SYSCONFIG_SMTP_ADDRESS", "Address of the SMTP server:");
define("SYSCONFIG_SMTP_ADDRESS_HELP", "smtp.mandrillapp.com");
define("SYSCONFIG_SMTP_ENCRYPTION", "SMTP encryption (can be TLS or STARTSSL):");
define("SYSCONFIG_SMTP_ENCRYPTION_HELP", "You can safely leave TLS here.");
define("SYSCONFIG_SMTP_PORT", "SMTP Port:");
define("SYSCONFIG_SMTP_PORT_HELP", "Default is 587.");
define("SYSCONFIG_SMTP_USERNAME", "SMTP username:");
define("SYSCONFIG_SMTP_PASSWORD", "SMTP password:");

// TEAM.PHP
define("TEAM_TITLE", "Team");
define("TEAM_STATISTICS", "Statistics");
define("TEAM_TIPS_TRICKS", "Tips and tricks");
define("TEAM_BELONG", "You belong to the");
define("TEAM_TEAM", "team");
define("TEAM_TOTAL_OF", "There is a total of");
define("TEAM_EXP_BY", "experiments by");
define("TEAM_DIFF_USERS", "different users");
define("TEAM_ITEMS_DB", "items in the database.");
define("TEAM_TIP_1", "You can use a TODOlist by pressing 't'");
define("TEAM_TIP_2", "You can have experiments templates (<a href='ucp.php?tab=3'>Control Panel</a>)");
define("TEAM_TIP_3", "The admin of a team can edit the status and the types of items available (<a href='admin.php?tab=4'>Admin Panel</a>)");
define("TEAM_TIP_4", "If you press Ctrl Shift D in the editor, the date will appear under the cursor");
define("TEAM_TIP_5", "Custom shortcuts are available (<a href='ucp.php?tab=2'>Control Panel</a>)");
define("TEAM_TIP_6", "You can duplicate experiments in one click");
define("TEAM_TIP_7", "Click a tag to list all items with this tag");
define("TEAM_TIP_8", "Register an account with <a href='https://www.universign.eu/en/timestamp'>Universign</a> to start timestamping experiments");
define("TEAM_TIP_9", "Only a locked experiment can be timestamped");
define("TEAM_TIP_10", "Once timestamped, an experiment cannot be unlocked or modified. Only comments can be added.");

// TIMESTAMP.PHP
define("TIMESTAMP_CONFIG_ERROR", "The timestamping feature is not configured. Please read the <a class='alert-link' href='https://github.com/NicolasCARPi/elabftw/wiki/finalizing#setting-up-timestamping'>wiki</a>.");
define("TIMESTAMP_ERROR", "There was an error in the timestamping. Login credentials probably wrong or no more credits.");
define("TIMESTAMP_USER_ERROR", "There was an error with the timestamping. Experiment is NOT timestamped. Error has been logged.");
define("TIMESTAMP_SUCCESS", "Experiment timestamped with success. The timestamped PDF can now be downloaded below.");

// UCP-EXEC.PHP
define("UCP_TITLE", "User Control Panel");
define("UCP_PASSWORD_SUCCESS", "Password updated!");
define("UCP_PROFILE_UPDATED", "Profile updated!");
define("UCP_ENTER_PASSWORD", "Enter your passsword to edit anything!");
define("UCP_PREFS_UPDATED", "Your preferences have been updated.");
define("UCP_TPL_NAME", "You need to specify a name for the template!");
define("UCP_TPL_SHORT", "The template name must be 3 characters long.");
define("UCP_TPL_SUCCESS", "Experiment template successfully added.");
define("UCP_TPL_EDITED", "Experiment template successfully edited.");
define("UCP_TPL_PLACEHOLDER", "Name of the template");
define("UCP_ACCOUNT", "Account");
define("UCP_PREFERENCES", "Preferences");
define("UCP_TPL", "Templates");
define("UCP_H4_1", "Modify your personal informations");
define("UCP_H4_2", "Modify your identity");
define("UCP_H4_3", "Modify your password");
define("UCP_NEWPASS", "New password");
define("UCP_CNEWPASS", "Confirm new password");
define("UCP_H4_4", "Modify your contact information");
define("UCP_BUTTON_1", "Update profile");
define("UCP_H3_1", "DISPLAY");
define("UCP_DEFAULT", "Default");
define("UCP_COMPACT", "Compact");
define("UCP_ORDER_BY", "Order by:");
define("UCP_ITEM_ID", "Item ID");
define("UCP_WITH", "with");
define("UCP_NEWER", "newer first");
define("UCP_OLDER", "older first");
define("UCP_LIMIT", "Items per page:");
define("UCP_H3_2", "KEYBOARD SHORTCUTS");
define("UCP_H3_3", "ALERT");
define("UCP_CLOSE_WARNING", "Display a warning before closing an edit window/tab ?");
define("UCP_ADD_TPL", "Add template");
define("UCP_EDIT_BUTTON", "Edit template");
define("LANGUAGE", "Language");

// VIEW DB
define("NOTHING_TO_SHOW", "Nothing to show with this ID.");
define("LAST_MODIFIED_BY", "Last modified by");
define("ON", "on");

// VIEW XP
define("VIEW_XP_FORBIDDEN", "<strong>Access forbidden:</strong> the visibility setting of this experiment is set to 'owner only'.");
define("VIEW_XP_RO", "<strong>Read-only mode:</strong> this experiment is owned by");
define("VIEW_XP_TIMESTAMPED", "Experiment was timestamped by");
define("AT", "at");
define("VIEW_XP_ELABID", "Unique eLabID:");
define("COMMENTS", "Comments");
define("ADD_COMMENT", "Add a comment");
define("DELETE_THIS", "Delete this?"); // in JS
define("CONFIRM_STAMP", "Once timestamped, an experiment cannot be edited anymore ! Are you sure you want to do this ?"); // in JS

// TAGCLOUD
define("TAGCLOUD_H4", "Tag cloud");
define("NOT_ENOUGH_TAGS", "Not enough tags to make a tagcloud.");

// STATISTICS
define("STATISTICS_H4", "Statistics");
define("STATISTICS_NOT_YET", "No statistics available yet.");
define("STATISTICS_EXP_FOR", "Experiments for");

// FILE UPLOAD
define("FILE_UPLOAD_H3", "Attach a file.");

// SHOW DB
define("SHOW_DB_CREATE_NEW", "CREATE NEW");
define("SHOW_DB_FILTER_TYPE", "FILTER TYPE");
define("FOUND", "Found");
define("RESULTS", "results");
define("FOUND_1", "Found 1 result.");
define("FOUND_0", "Nothing found.");
define("SHOW_DB_WELCOME", "<strong>Welcome to eLabFTW.</strong>Select an item in the «Create new» list to begin filling your database.");
define("SHOW_DB_LAST_10", "Showing last 10 uploads:");

// SHOW XP
define("SHOW_XP_MORE", "Load more");
define("SHOW_XP_CREATE", "Create experiment");
define("SHOW_XP_CREATE_TPL", "Create from template");
define("SHOW_XP_FILTER_STATUS", "FILTER STATUS");
define("SHOW_XP_NO_TPL", "<strong>You do not have any templates yet.</strong> Go to <a  class='alert-link' href='ucp.php?tab=3'>your control panel</a> to make one !");
define("SHOW_XP_NO_EXP", "<strong>Welcome to eLabFTW.</strong>Click the <img src='img/add.png' alt='Create experiment' /><a class='alert-link' href='create_item.php?type=exp'>Create experiment</a> button to get started.");

// EDIT DB
define("LOCKED_NO_EDIT", "<strong>This item is locked.</strong> You cannot edit it.");
define("TAGS", "Tags");
define("CLOSE_WARNING", "Do you want to navigate away from this page? Unsaved changes will be lost!");

// EDIT XP
define("EDIT_XP_NO_RIGHTS", "<strong>Cannot edit:</strong> this experiment is not yours!");
define("EDIT_XP_TAGS_HELP", "click a tag to remove it");
define("EDIT_XP_ADD_TAG", "Add a tag");
define("ONLY_THE_TEAM", "Only the team");
define("EXPERIMENT", "Experiment");
define("LINKED_ITEMS", "Linked items");
define("ADD_LINK", "Add a link");
define("ADD_LINK_PLACEHOLDER", "from the database");
define("SHOW_HISTORY", "Show history");

// INC/HEAD.PHP
define("LOGGED_IN_AS", "Howdy,");
define("SETTINGS", "Settings");
define("LOGOUT", "Logout");

// INC/FOOTER.PHP
define("CHECK_FOR_UPDATES", "CHECK FOR UPDATES");
define("SYSADMIN_PANEL", "SYSADMIN PANEL");
define("ADMIN_PANEL", "ADMIN PANEL");
define("POWERED_BY", "Powered by");
define("PAGE_GENERATED", "Page generated in");