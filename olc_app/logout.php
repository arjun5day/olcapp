<?php
include_once ("computer.php");
session_destroy();
header ("Location: login.php");
?>