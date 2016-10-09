<?php   
session_start(); //to ensure you are using same session
unset($_SESSION['emailLogin']);
session_destroy(); //destroy the session
header("Location: /AdminLTE-2.3.6/login.php"); //to redirect back to "index.php" after logging out
exit();
?>