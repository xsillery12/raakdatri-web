<?php
include '../database/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangkap data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $noPegawai = $_POST['noPegawai'];
    $password = $_POST['password'];

    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $gambar_path = "../ava_img/" . $gambar;

    move_uploaded_file($gambar_tmp, $gambar_path);

    // Query ke database untuk memeriksa keberadaan pegawai
    $query = "SELECT * FROM pegawai WHERE nama = '$nama' AND email = '$email' AND no_pegawai = '$noPegawai'";
    $result = mysqli_query($koneksi, $query);

    // Jika data pegawai ditemukan, izinkan registrasi sebagai admin
    if (mysqli_num_rows($result) > 0) {
        $queryInsert = "INSERT INTO admins (nama, email, no_pegawai, password, gambar) VALUES ('$nama', '$email', '$noPegawai', '$password', '$gambar')";
        mysqli_query($koneksi, $queryInsert);

        $message = "Successful registration. You will be redirected to the login page.";

        echo '<script>
                setTimeout(function() {
                    window.location.href = "admin_login.php";
                }, 3000);
              </script>';
    } else {
        // Jika data pegawai tidak ditemukan, berikan pesan error atau tindakan yang sesuai.
        $message = "Data pegawai tidak ditemukan. Registrasi tidak dapat dilakukan.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_regist.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Registrasi - Raakdatri Admin</title>
</head>

<body>

    <?php
    if (!empty($message)) {
        echo '
        <div class="message">
            <span>' . $message . '</span>
            <i class="bx bx-x" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
    ?>
    <section class="form-container">
        <form action="" method="POST" enctype="multipart/form-data">
            <h3>Register as Admin</h3>
            <p>Admin registration can only be done by employees who have been registered in the database.</p>
            <input type="text" name="nama" maxlength="50" required placeholder="enter your username" class="box" oninput="this.value = this.value.replace(/\s/g,'')">
            <input type="email" name="email" maxlength="50" required placeholder="enter your email" class="box" oninput="this.value = this.value.replace(/\s/g,'')">
            <input type="text" name="noPegawai" maxlength="50" required placeholder="enter your employee number" class="box" oninput="this.value = this.value.replace(/\s/g,'')">
            <input type="password" name="password" maxlength="50" required placeholder="enter your password" class="box" oninput="this.value = this.value.replace(/\s/g,'')">
            <input type="file" name="gambar" class="box" required accept="image/*">
            <p>Already an admin? <a href="admin_login.php">Login</a></p>
            <input type="submit" value="Register" name="submit" class="btn">
        </form>
    </section>
</body>

</html>