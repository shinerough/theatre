<?php
$hn = "localhost";
$un = "mike_admin";
$pw = "6fI/SK1p30R4dlnH";
$db = "theatre";
// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>