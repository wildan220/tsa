<?php
 session_start();
 session_destroy();
 header("Location: loginForm.html");
 die();
?>