<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $query = "INSERT INTO users (name, email, password, role, status) 
              VALUES ('$name', '$email', '$password', 'student', 'pending')";
    mysqli_query($conn, $query);
    echo "Registration submitted. Awaiting admin approval.";
}
?>
<form method="POST">
    <input name="name" placeholder="Name" required>
    <input name="email" type="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>