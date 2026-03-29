<?php
$conn = new mysqli("localhost", "root", "", "mvc_app");

if ($conn->connect_error) {
    die("Greška: " . $conn->connect_error);
}
?>