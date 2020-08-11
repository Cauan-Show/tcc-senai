<?php
	session_start();
    session_destroy();
	unset($_SESSION['loginadmin']);
	unset($_SESSION['senhaadmin']);
    $_SESSION['loginadmin'] = null;
    $_SESSION['senhaadmin'] = null;
    echo ("<script>location='index.php'</script>");
?>