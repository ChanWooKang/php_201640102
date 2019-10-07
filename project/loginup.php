<?php
session_start();
$_SESSION["username"] = "대숙이";
setcookie("mynum","201640102", time()+(86400*30),"/");