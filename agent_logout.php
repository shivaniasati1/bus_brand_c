<?php
session_start();
$_session['email'] = '';
unset($_session['email']);
session_destroy();
header('location:agent.php');
?>