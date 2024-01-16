<?php
include '../database/connect.php';

$fetch_profile = [];

if (isset($_COOKIE['admin_id'])) {
    $admin_id = $_COOKIE['admin_id'];
} else {
    $admin_id = '';
}

if (isset($_POST['add_product'])) {
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $harga = filter_input(INPUT_POST, 'harga', FILTER_SANITIZE_STRING);
    $kategori = filter_input(INPUT_POST, 'kategori', FILTER_SANITIZE_STRING);
    $details = filter_input(INPUT_POST, 'details', FILTER_SANITIZE_STRING);

    $gambar_1 = $_FILES['gambar_1']['name'];
    $gambar_1_size = $_FILES['gambar_1']['size'];
    $gambar_1_tmp_name = $_FILES['gambar_1']['tmp_name'];
    $gambar_1_folder = '../uploaded_files/' . $gambar_1;

    $gambar_2 = $_FILES['gambar_2']['name'];
    $gambar_2_size = $_FILES['gambar_2']['size'];
    $gambar_2_tmp_name = $_FILES['gambar_2']['tmp_name'];
    $gambar_2_folder = '../uploaded_files/' . $gambar_2;

    $gambar_3 = $_FILES['gambar_3']['name'];
    $gambar_3_size = $_FILES['gambar_3']['size'];
    $gambar_3_tmp_name = $_FILES['gambar_3']['tmp_name'];
    $gambar_3_folder = '../uploaded_files/' . $gambar_3;

    $select_products = $koneksi->prepare("SELECT * FROM `products` WHERE nama = ?");
    $select_products->bind_param('s', $nama);
    $select_products->execute();
    $select_products->store_result();

    if ($select_products->num_rows > 0) {
        $message = "Nama produk sudah ada!";
    } else {
        if ($gambar_1_size > 2000000 || $gambar_2_size > 2000000 || $gambar_3_size > 2000000) {
            $message = "Ukuran gambar terlalu besar";
        } else {
            move_uploaded_file($gambar_1_tmp_name, $gambar_1_folder);
            move_uploaded_file($gambar_2_tmp_name, $gambar_2_folder);
            move_uploaded_file($gambar_3_tmp_name, $gambar_3_folder);

            $insert_product = $koneksi->prepare("INSERT INTO `products`(nama, details, harga, kategori, gambar_1, gambar_2, gambar_3) VALUES (?,?,?,?,?,?,?)");
            $insert_product->bind_param('sssssss', $nama, $details, $harga, $kategori, $gambar_1, $gambar_2, $gambar_3);
            $insert_product->execute();

            $message = "Yeay... Produk berhasil ditambahkan!";
        }
    }
    header("Location: products.php");
    exit();
}

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_product_image = $koneksi->prepare("SELECT * FROM `products` WHERE id = ?");
    $delete_product_image->bind_param('i', $delete_id);
    $delete_product_image->execute();
    $result = $delete_product_image->get_result();

    if ($result->num_rows > 0) {
        $fetch_delete_image = $result->fetch_assoc();
        unlink('../uploaded_files/' . $fetch_delete_image['gambar_1']);
        unlink('../uploaded_files/' . $fetch_delete_image['gambar_2']);
        unlink('../uploaded_files/' . $fetch_delete_image['gambar_3']);
        $delete_product = $koneksi->prepare("DELETE FROM `products` WHERE id = ?");
        $delete_product->bind_param('i', $delete_id);
        $delete_product->execute();
        $delete_cart = $koneksi->prepare("DELETE FROM `cart` WHERE product_id = ?");
        $delete_cart->bind_param('i', $delete_id);
        $delete_cart->execute();
        $delete_wishlist = $koneksi->prepare("DELETE FROM `wishlist` WHERE product_id = ?");
        $delete_wishlist->bind_param('i', $delete_id);
        $delete_wishlist->execute();
    }
    header('location:products.php');
    exit();
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
    <title>Add Products - Raakdatri Admin</title>
</head>

<body>
    <?php include '../components/header.php' ?>

    <section class="add-products">
        <h1 class="heading">Add Products</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="flex">
                <div class="inputBox">
                    <span>Product Name (required)</span>
                    <input type="text" required placeholder="enter product name" name="nama" maxlength="100" class="box">
                </div>
                <div class="inputBox">
                    <span>Product Price (required)</span>
                    <input type="number" min="0" max="9999999999" required placeholder="enter product price" name="harga" onkeypress="if(this.value.length == 10) return false;" class="box">
                </div>
                <div class="inputBox">
                    <span>Category</span>
                    <select name="kategori" class="box">
                        <option value="women">Women</option>
                        <option value="men">Men</option>
                        <option value="t-shirt">T-Shirt</option>
                        <option value="shorts">Shorts</option>
                        <option value="accessories">Accessories</option>
                        <option value="footware">Footware</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Picture 1 (required)</span>
                    <input type="file" name="gambar_1" class="box" accept="image/jpg, image/jpeg, image/png, image/webp" required>
                </div>
                <div class="inputBox">
                    <span>Picture 2 (Opsional)</span>
                    <input type="file" name="gambar_2" class="box" accept="image/jpg, image/jpeg, image/png, image/webp">
                </div>
                <div class="inputBox">
                    <span>Picture 3 (Opsional)</span>
                    <input type="file" name="gambar_3" class="box" accept="image/jpg, image/jpeg, image/png, image/webp">
                </div>
                <div class="inputBox">
                    <span>Product Details</span>
                    <textarea name="details" class="box" placeholder="enter product details" required maxlength="500" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Add Product" name="add_product" class="btn">
            </div>
        </form>
    </section>

    <section class="show-products">
        <div class="box-container">
            <?php
            $show_products = $koneksi->query("SELECT * FROM `products`");

            if ($show_products->num_rows > 0) {
                while ($fetch_products = $show_products->fetch_assoc()) {
            ?>
                    <div class="box">
                        <img src="../uploaded_files/<?= $fetch_products['gambar_1']; ?>" alt="">
                        <div class="nama"><?= $fetch_products['nama']; ?></div>
                        <div class="harga">IDR <?= number_format($fetch_products['harga'], 2, ',', '.'); ?></div>
                        <div class="kategori"><?= $fetch_products['kategori']; ?></div>
                        <div class="details"><?= $fetch_products['details']; ?></div>
                        <div class="flex-btn">
                            <a href="update_product.php?update=<?= $fetch_products['id']; ?>" class="option-btn">Update</a>
                            <a href="products.php?delete=<?= $fetch_products['id']; ?>" class="delete-btn" onclick="return confirm('Delete this product?')">Delete</a>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo '<p class="empty">No products added!</p>';
            }
            ?>
        </div>
    </section>

    <?php include '../components/footer.php' ?>

    <script src="../js/admin.js"></script>
</body>

</html>