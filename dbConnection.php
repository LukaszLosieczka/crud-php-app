<?php
$databaseHost = 'localhost';
$databaseName = 'phpcrudapp';
$databaseUsername = 'user1';
$databasePassword = 'user1';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
