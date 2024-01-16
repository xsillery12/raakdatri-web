<?php
include 'database/connect.php';

// Jika formulir dikirimkan (method POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangkap data dari formulir
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Lakukan pengecekan apakah data telah terisi dengan benar
    if (!empty($nama) && !empty($no_telp) && !empty($email) && !empty($password) && !empty($confirm_password)) {
        // Lakukan pengecekan lainnya sebelum memasukkan data ke dalam database
        // Misalnya, validasi data, cek kecocokan password, cek email sudah terdaftar atau belum, dll.

        // Cek apakah email atau nomor telepon sudah terdaftar
        $check_query = "SELECT * FROM user WHERE email='$email' OR no_telp='$no_telp'";
        $check_result = mysqli_query($koneksi, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            $row = mysqli_fetch_assoc($check_result);
            if ($row['email'] === $email) {
                $message = "Email is already registered!";
            } elseif ($row['no_telp'] === $no_telp) {
                $message = "Phone number is already registered!";
            }
        } else {
            // Jika semua pengecekan telah dilakukan dan data valid, baru masukkan ke database
            $query = "INSERT INTO user (nama, no_telp, email, password) VALUES ('$nama', '$no_telp', '$email', '$password')";

            // Eksekusi query untuk menyimpan data ke database
            if (mysqli_query($koneksi, $query)) {
                // Notifikasi jika registrasi berhasil
                $message = "Yeay... your account has been registered! You will be directed to login page . See you 👋";
                echo '<script>
                    setTimeout(function() {
                        window.location.href = "user_login.php";
                    }, 3000);
                </script>';
            }
        }
    } else {
        // Tambahkan pesan untuk memberitahu pengguna bahwa semua kolom harus diisi
        $message = "Please fill in all fields";
    }
}
// Tutup koneksi ke database setelah selesai
mysqli_close($koneksi);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Raakdatri Indonesia</title>
    <link rel="stylesheet" href="css/user_regist.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="img/logo.svg" type="image/svg">
    <!-- Your other external CSS and font imports -->
</head>

<body>

    <?php
    // Tampilkan pesan jika ada
    if (isset($message)) {
        echo '
    <div class="message">
        <span>' . $message . '</span>
        <i class="bx bx-x" onclick="this.parentElement.remove();"></i>
    </div>
    ';
    }
    ?>

    <div class="login-form">
        <div class="content">
            <h1>Create new account</h1>
            <form action="" method="POST">
                <input type="name" name="nama" id="nama" placeholder="Enter your name" required autofocus>
                <input type="tel" name="no_telp" id="no_telp" placeholder="Enter your phone number" required autofocus>
                <input type="email" name="email" id="email" placeholder="Enter your email" required autofocus>
                <div class="password-container">
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    <i class='bx bx-show-alt toggle-password' id="togglePassword"></i>
                </div>
                <div class="password-container">
                    <input type="password" name="confirm_password" id="cpassword" placeholder="Confirm your password" required>
                    <i class='bx bx-show-alt toggle-password' id="toggleConfirmPassword"></i>
                </div>
                <div class="agree-terms">
                    <input type="checkbox" id="agree_terms" name="agree_terms" required>
                    <label for="agree_terms">I agree to Terms and Conditions and Privacy Policy</label>
                </div>
                <button class="btn" type="submit">Register</button>
            </form>
            <p class="account">Already have an account? <a href="user_login.php">Login Now</a></p>
        </div>
        <div class="form-img">
            <img src="img/regist.png" alt="Login Image">
        </div>
    </div>

    <script src="js/regist.js"></script>
</body>

</html>