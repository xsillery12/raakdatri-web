<?php
include '../database/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
   header('location:admin_login.php');
}

if (isset($_POST['submit'])) {
   if (isset($_POST['nama'])) {
      $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);

      $update_profile_name = $koneksi->prepare("UPDATE `admins` SET nama = ? WHERE id = ?");
      $update_profile_name->execute([$nama, $admin_id]);
   }

   if (!empty($_POST['new_pass'])) {
      $new_pass = $_POST['new_pass'];
      $confirm_pass = $_POST['confirm_pass'];
  
      if ($new_pass == $confirm_pass) {
          $update_admin_pass = $koneksi->prepare("UPDATE `admins` SET password = ? WHERE id = ?");
          $update_admin_pass->execute([$new_pass, $admin_id]);
          $message[] = 'Password anda berhasil diperbarui';
      } else {
          $message[] = 'Konfirmasi password baru tidak cocok';
      }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/admin_regist.css">
   <link rel="stylesheet" href="../css/admin.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <title>Update</title>
</head>

<body>

   <?php include '../components/header.php'; ?>

   <section class="form-container">

      <form action="" method="post">
         <h3>Update Profile</h3>
         <input type="hidden" name="prev_pass" value="<?= $fetch_profile['password']; ?>">
         <input type="text" name="nama" value="<?= $fetch_profile['nama']; ?>" required placeholder="Enter your username" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
         <input type="password" name="old_pass" placeholder="Enter your old password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
         <input type="password" name="new_pass" placeholder="Enter your new password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
         <input type="password" name="confirm_pass" placeholder="Confirm your new password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
         <input type="submit" value="update now" class="btn" name="submit">
      </form>

   </section>

   <?php include '../components/footer.php' ?>

   <script src="../js/admin.js"></script>

</body>

</html>