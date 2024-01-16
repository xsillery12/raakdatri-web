<?php
include '../database/connect.php';

$gambar_path = "../uploaded_files/";

$fetch_profile = [];

if (isset($_COOKIE['admin_id'])) {
    $admin_id = $_COOKIE['admin_id'];
} else {
    $admin_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/admin_profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Profile</title>
</head>

<body>

    <?php include '../components/header.php'; ?>

    <section class="profile-container">

        <div class="profile">
            <img src="<?= $gambar_path . $fetch_profile['gambar']; ?>" alt="">
            <!-- Sementara -->
            <!-- <img src="../uploaded_files/pp-admin-1.webp" alt=""> -->
            <h3><?= $fetch_profile['nama']; ?></h3>
            <h3><?= $fetch_profile['email']; ?></h3>
            <h3><?= $fetch_profile['no_pegawai']; ?></h3>
            <button onclick="window.location.href='update.php'" class="btn-update">Update Profile</button>
        </div>

    </section>

    </section>

    <?php include '../components/footer.php' ?>

    <script src="../js/admin.js"></script>

</body>

</html>