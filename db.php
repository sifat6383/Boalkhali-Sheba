<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "boalkhali sheba"
);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>