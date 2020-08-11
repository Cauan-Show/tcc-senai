<?php
	session_start();
    session_destroy();
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
    $_SESSION['login'] = null;
    $_SESSION['senha'] = null;
    echo ("<script>location='index.php'</script>");
?>