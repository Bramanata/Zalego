<?php
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 6000)) {
	// last request was more than 5 minutes ago
	session_unset();     // unset $_SESSION variable for the run-time
	session_destroy();   // destroy session data in storage
}

$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp


if (!isset($_SESSION['CREATED'])) {
	$_SESSION['CREATED'] = time();
} else if (time() - $_SESSION['CREATED'] > 6000) {
	// session started more than 5 minutes ago 5*60 =300 seconds makes 5 minutes
	session_regenerate_id(true);    // change session ID for the current session an invalidate old session ID
	$_SESSION['CREATED'] = time();  // update creation time
}
