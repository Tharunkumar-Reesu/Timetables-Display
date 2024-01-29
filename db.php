<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "test";
// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if ($con) {
    echo "Connection ok ";
} else {
    echo "Connection failed";
}
