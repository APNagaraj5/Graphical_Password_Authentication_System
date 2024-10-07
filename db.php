<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'graphical_pwd';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
