<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'universitas';

$koneksi = mysqli_connect($hostname, $username, $password, $database);
