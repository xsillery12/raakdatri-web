<?php
$gambar_path = "../uploaded_files/";
?>

<header class="header">
    <section class="flex">
        <a href="dashboard.php" class="logo">Raakdatri Admin</a>

        <form action="search_page.php" method="POST" class="search-form">
            <input type="text" placeholder="Search here..." maxlength="100" name="search-box">
            <button type="submit" name="search-btn"><i class='bx bx-search'></i></button>
        </form>

        <div class="icons">
            <div id="search-btn"><i class='bx bx-search'></i></div>
            <div id="user-btn"><i class='bx bxs-user'></i></div>
        </div>

        <div class="profile">
            <?php
            $stmt = $koneksi->prepare("SELECT * FROM `admins` WHERE id = ?");
            $stmt->bind_param("i", $admin_id);
            $stmt->execute();

            $result = $stmt->get_result();

            $num_rows = $result->num_rows;

            if ($num_rows > 0) {
                $fetch_profile = $result->fetch_assoc();
            ?>
                <img src="<?= $gambar_path . $fetch_profile['gambar']; ?>" alt="">
                <h3><?= $fetch_profile['nama']; ?></h3>
                <a href="profile.php" class="btn">View Profile</a>
                <a href="../components/admin_logout.php" onclick="return confirm ('yakin ingin keluar dari dashboard?');" class="delete-btn">Logout</a>
            <?php
            } else {
            }
            ?>
        </div>
    </section>
</header>

<div class="side-bar">
    <div class="profile">
        <?php
        $stmt = $koneksi->prepare("SELECT * FROM `admins` WHERE id = ?");
        $stmt->bind_param("i", $admin_id);
        $stmt->execute();

        $result = $stmt->get_result();

        $num_rows = $result->num_rows;

        if ($num_rows > 0) {
            $fetch_profile = $result->fetch_assoc();
        ?>
            <img src="<?= $gambar_path . $fetch_profile['gambar']; ?>" alt="">
            <h3><?= $fetch_profile['nama']; ?></h3>
            <a href="profile.php" class="btn">View Profile</a>
        <?php
        } else {
        }
        ?>
    </div>

    <nav class="navbar">
        <a href="dashboard.php"><i class='bx bxs-home'></i><span>Home</span></a>
        <a href="products.php"><i class='bx bxs-shopping-bag-alt'></i><span>Products</span></a>
        <a href="orders.php"><i class='bx bxs-cart-alt'></i><span>Orders</span></a>
        <a href="../components/admin_logout.php" onclick="return confirm ('yakin ingin keluar dari dashboard?');" class="delete-button"><i class='bx bx-log-out'></i><span>Logout</span></a>
    </nav>
</div>