<?php
    session_start();
	unset($_SESSION['username']);
	header("Location: /upload_website/");
?>