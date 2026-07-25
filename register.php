<?php
include "db.php";

$message = "";

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO boalkhali (name, email, phone, password)
            VALUES ('$name', '$email', '$phone', '$password')";

    if (mysqli_query($conn, $sql)) {
        $message = "Registration Successful!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - Boalkhali Sheba</title>
</head>

<body>

    <h2>Create Account</h2>

    <?php if ($message != ""): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="POST">

        <input 
            type="text"
            name="name"
            placeholder="Enter Name"
            required
        >

        <br><br>

        <input 
            type="email"
            name="email"
            placeholder="Enter Email"
            required
        >

        <br><br>

        <input 
            type="text"
            name="phone"
            placeholder="Enter Phone Number"
            required
        >

        <br><br>

        <input 
            type="password"
            name="password"
            placeholder="Enter Password"
            required
        >

        <br><br>

        <button type="submit" name="register">
            Register
        </button>

    </form>

</body>

</html>