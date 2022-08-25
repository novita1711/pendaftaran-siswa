<?php
session_start();

session_destory();

header("location:index.php?pesan=logout");
?>