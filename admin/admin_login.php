<?php
include '../database/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admins WHERE nama = '$nama' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $admin_data = mysqli_fetch_assoc($result);

        session_start();
        $_SESSION['admin_id'] = $admin_data['id'];
        header("Location: dashboard.php");
        exit();
    } else {
        $message = "Username atau password salah. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login - Raakdatri Admin</title>
</head>
<body>
    <?php
    if (isset($message)) {
        echo '
        <div class="message">
            <span>' . $message . '</span>
            <i class="bx bx-x" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
    ?>
    <section class="form-container">
        <form action="" method="POST">
            <h3>Login as Admin</h3>
            <p>Please login using your registered admin account</p>
            <input type="text" name="nama" maxlength="50" required placeholder="enter your username" class="box" oninput="this.value = this.value.replace(/\s/g,'')">
            <input type="password" name="password" maxlength="50" required placeholder="enter your password" class="box" oninput="this.value = this.value.replace(/\s/g,'')">
            <p class="daftar">Don't have an account yet? <a href="admin_regist.php">Register</a></p>
            <input type="submit" value="login" name="submit" class="btn">
        </form>
    </section>
</body>

</html>