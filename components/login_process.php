<?php
include '../database/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            header("Location: ../homepage.php");
            exit();
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "Query failed";
    }

    mysqli_close($koneksi);
}
?>
