<?php
$conn = new mysqli("localhost", "rayhan", "123", "wtm");

if ($conn->connect_errno) {
    die("Database connection failed due to " . $conn->connect_err);
}
echo "Database connection successful";
$conn->close();
?>