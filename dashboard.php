<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_name = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Boalkhali Sheba</title>
</head>

<body>

    <h1>Welcome, <?php echo $user_name; ?>!</h1>

    <p>You are successfully logged in.</p>

    <a href="logout.php">
        <button>Logout</button>
    </a>

</body>

</html>