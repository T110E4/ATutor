<?php
if (!defined('AT_INCLUDE_PATH')) { exit; }

$_course_privilege = 0; // 0/false | 1/AT_PRIV_ADMIN | 'new'/TRUE
$_admin_privilege  = 0; // 0/false | 1/AT_ADMIN_PRIV_ADMIN | 'new'/TRUE

$directory = realpath(AT_INCLUDE_PATH . '../') . '/sco'; // a top level directory

// check if the directory is writeable
if (!is_dir($directory) && !@mkdir($directory)) {
	$msg->addError(array('MODULE_INSTALL', '<li>'.$directory.' does not exist. Please create it.</li>'));
} else if (!is_writable($directory) && @chmod($directory, 0666)) {
	$msg->addError(array('MODULE_INSTALL', '<li>'.$directory.' is not writeable. On Unix issue the command <kbd>chmod a+rw</kbd>.</li>'));
}


if (!$msg->containsErrors()) {
	// deal with the SQL file:
}

?>