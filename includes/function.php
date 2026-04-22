<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
// check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}


function getSuccess() {
    if (isset($_SESSION['success'])) {
        $msg = $_SESSION['success'];
        unset($_SESSION['success']);
        return $msg;
    }
    return '';
}
?>

