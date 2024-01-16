<?php
include '../database/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:admin_login.php');
}

if (isset($_POST['update_payment'])) {
    $order_id = $_POST['order_id'];
    $status_bayar = $_POST['status_bayar'];
    $status_pengiriman = $_POST['status_pengiriman'];

    $update_payment = $koneksi->prepare("UPDATE `orders` SET status_bayar = ?, status_pengiriman = ? WHERE id = ?");
    $update_payment->execute([$status_bayar, $status_pengiriman, $order_id]);
    $message[] = 'Status Pembayaran dan Pengiriman Telah Diperbarui';
}

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_order = $koneksi->prepare("DELETE FROM `orders` WHERE id = ?");
    $delete_order->execute([$delete_id]);
    header('location:order.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Order</title>
</head>

<body>

    <?php include '../components/header.php'; ?>

    <section class="orders">

        <h1 class="heading">Orders</h1>

        <div class="box-container">

            <?php
            $select_orders = $koneksi->prepare("SELECT * FROM `orders`");
            $select_orders->execute();

            if ($select_orders->num_rows > 0) {
                while ($fetch_orders = $select_orders->fetch_assoc()) {
            ?>
                    <div class="container">
                        <h2><?= $fetch_orders['tanggal']; ?> - <?= $fetch_orders['invoice']; ?></h2>
                        <div class="status-box">
                            <p>Delivery Status: <?= $fetch_orders['status_pengiriman']; ?></p>
                        </div>
                        <img src="img/sepatu-3.png" alt="">
                        <p><?= $fetch_orders['nama_barang']; ?></p>
                        <div class="product-info">
                            <div class="price">Price : <?= $fetch_orders['harga']; ?></div>
                            <button class="detail-button" id="openPopupButton">Details</button>
                        </div>
                        <form action="" method="post">
                            <input type="hidden" name="order_id" value="<?= $fetch_orders['id']; ?>">
                            <select name="status_pengiriman" class="select">
                                <option selected disabled><?= $fetch_orders['status_pengiriman']; ?></option>
                                <option value="pending">Menunggu Pembayaran</option>
                                <option value="shipping">Sedang Dikirim</option>
                                <option value="completed">Telah Sampai</option>
                            </select>
                            <div class="flex-btn">
                                <input type="submit" value="Update" class="option-btn" name="update_payment">
                                <a href="order.php?delete=<?= $fetch_orders['id']; ?>" class="delete-btn" onclick="return confirm('Hapus pesanan ini?');">Hapus</a>
                            </div>
                        </form>
                    </div>
            <?php
                }
            } else {
                echo '<p class="empty">No orders yet.</p>';
            }
            ?>


        </div>

    </section>

    <?php include '../components/footer.php' ?>

    <script src="../js/admin.js"></script>

</body>

</html>