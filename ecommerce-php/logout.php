<?php
session_start();
include 'require.php';
session_destroy();
unset($_SESSION['user_id']);
header("Location: ".BASE_URL);