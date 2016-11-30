<?php

session_start();

$_SESSION['user_id'] != '';

// php data object
$db = new PDO('mysql:dbname=php_project;host=localhost', 'root', 'Ok5jl5Ql');

// Security - if NOT logged in
if(!isset($_SESSION['user_id'])) {
  die('You are NOT signed in.');
}

