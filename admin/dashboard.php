<?php
include '../database/connect.php';

$fetch_profile = [];

if(isset($_COOKIE['admin_id'])){
    $admin_id = $_COOKIE['admin_id'];
} else {
    $admin_id = '';
}

$count_product = $koneksi->prepare("SELECT COUNT(*) as total FROM `products` WHERE admin_id = ?");
$count_product->bind_param("i", $admin_id);
$count_product->execute();
$result_product = $count_product->get_result();
$row_product = $result_product->fetch_assoc();

$total_products = $row_product['total'];

$count_order = $koneksi->prepare("SELECT * FROM `orders` WHERE user_id = ?");
$count_order->bind_param("i", $admin_id);
$count_order->execute();

$result_order = $count_order->get_result();

$total_orders = $result_order->num_rows;

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
    <title>Dashboard - Raakdatri Admin</title>
</head>

<body>
    <?php include '../components/header.php' ?>

    <section class="dashboard">
        <h1 class="heading">Dashboard</h1>
            <div class="box-container">
                <div class="box">
                    <h3>Welcome!</h3>
                    <p><?= $fetch_profile['nama']; ?></p>
                    <a href="update.php" class="btn">View Profile</a>
                </div>

                <div class="box">
                    <h3><?= $total_products; ?></h3>
                    <p>Products Added</p>
                    <a href="products.php" class="btn">Add New Products</a>
                </div>

                <div class="box">
                    <h3><?= $total_orders; ?></h3>
                    <p>Unprocessed Orders</p>
                    <a href="order.php" class="btn">View Order</a>
                </div>

                <div class="box">
                    <h3><?= $total_orders; ?></h3>
                    <p>Orders processed</p>
                    <a href="order.php" class="btn">View Order</a>
                </div>

                <div class="box">
                    <h3><?= $total_orders; ?></h3>
                    <p>Orders Completed</p>
                    <a href="order.php" class="btn">View Order</a>
                </div>

                <div class="box">
                    <h3><?= $total_orders; ?></h3>
                    <p>Total Orders</p>
                    <a href="order.php" class="btn">View Order</a>
                </div>
            </div>
    </section>


    <?php include '../components/footer.php' ?>

    <script src="../js/admin.js"></script>
</body>

</html>