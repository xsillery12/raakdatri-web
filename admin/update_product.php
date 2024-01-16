<?php
include '../database/connect.php';

$fetch_profile = [];

if (isset($_COOKIE['admin_id'])) {
    $admin_id = $_COOKIE['admin_id'];
} else {
    $admin_id = '';
}

if (isset($_POST['update'])) {
    $product_id = $_POST['product_id'];
    $product_id = filter_var($product_id, FILTER_SANITIZE_STRING);

    $nama = $_POST['nama'];
    $nama = filter_var($nama, FILTER_SANITIZE_STRING);

    $harga = $_POST['harga'];
    $harga = filter_var($harga, FILTER_SANITIZE_STRING);

    $kategori = $_POST['kategori'];
    $kategori = filter_var($kategori, FILTER_SANITIZE_STRING);
    $old_kategori = $_POST['old_kategori'];
    $old_kategori = filter_var($old_kategori, FILTER_SANITIZE_STRING);
    if ($kategori !== $old_kategori) {
        $update_kategori = $koneksi->prepare("UPDATE `products` SET kategori = ? WHERE id = ?");
        $update_kategori->execute([$kategori, $product_id]);
    }

    $details = $_POST['details'];
    $details = filter_var($details, FILTER_SANITIZE_STRING);

    $update_product = $koneksi->prepare("UPDATE `products` SET nama = ?, details = ?, harga = ? WHERE id = ?");
    $update_product->execute([$nama, $details, $harga, $product_id]);

    $message[] = "Produk berhasil diupdate!";

    $old_gambar_1 = $_POST['old_gambar_1'];
    $gambar_1 = $_FILES['gambar_1']['name'];
    $gambar_1_size = $_FILES['gambar_1']['size'];
    $gambar_1_tmp_name = $_FILES['gambar_1']['tmp_name'];
    $gambar_1_folder = '../uploaded_files/' . $gambar_1;

    if (!empty($gambar_1)) {
        if ($gambar_1_size > 2000000) {
            $message[] = "Ukuran gambar terlalu besar!";
        } else {
            move_uploaded_file($gambar_1_tmp_name, $gambar_1_folder);

            if (file_exists('../uploaded_img/' . $old_gambar_1)) {
                unlink('../uploaded_img/' . $old_gambar_1);
                $message[] = "Gambar 1 diperbarui!";
            } else {
                $message[] = "Gagal menghapus gambar lama!";
            }

            $update_gambar_1 = $koneksi->prepare("UPDATE `products` SET gambar_1 = ? WHERE id = ?");
            $update_gambar_1->execute([$gambar_1, $product_id]);
        }
    }

    $old_gambar_2 = $_POST['old_gambar_2'];
    $gambar_2 = $_FILES['gambar_2']['name'];
    $gambar_2_size = $_FILES['gambar_2']['size'];
    $gambar_2_tmp_name = $_FILES['gambar_2']['tmp_name'];
    $gambar_2_folder = '../uploaded_files/' . $gambar_2;

    if (!empty($gambar_2)) {
        if ($gambar_2_size > 2000000) {
            $message[] = "Ukuran gambar terlalu besar!";
        } else {
            move_uploaded_file($gambar_2_tmp_name, $gambar_2_folder);

            if (file_exists('../uploaded_img/' . $old_gambar_2)) {
                unlink('../uploaded_img/' . $old_gambar_2);
                $message[] = "Gambar 2 diperbarui!";
            } else {
                $message[] = "Gagal menghapus gambar lama!";
            }

            $update_gambar_2 = $koneksi->prepare("UPDATE `products` SET gambar_2 = ? WHERE id = ?");
            $update_gambar_2->execute([$gambar_2, $product_id]);
        }
    }

    $old_gambar_3 = $_POST['old_gambar_3'];
    $gambar_3 = $_FILES['gambar_3']['name'];
    $gambar_3_size = $_FILES['gambar_3']['size'];
    $gambar_3_tmp_name = $_FILES['gambar_3']['tmp_name'];
    $gambar_3_folder = '../uploaded_img/' . $gambar_3;

    if (!empty($gambar_3)) {
        if ($gambar_3_size > 2000000) {
            $message[] = "Ukuran gambar terlalu besar!";
        } else {
            move_uploaded_file($gambar_3_tmp_name, $gambar_3_folder);

            if (file_exists('../uploaded_img/' . $old_gambar_3)) {
                unlink('../uploaded_img/' . $old_gambar_3);
                $message[] = "Gambar 3 diperbarui!";
            } else {
                $message[] = "Gagal menghapus gambar lama!";
            }

            $update_gambar_3 = $koneksi->prepare("UPDATE `products` SET gambar_3 = ? WHERE id = ?");
            $update_gambar_3->execute([$gambar_3, $product_id]);
        }
    }
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
    <title>Dashboard - Raakdatri Admin</title>
</head>

<body>
    <?php include '../components/header.php' ?>

    <section class="update-product">
        <?php
        $update_id = $_GET['update'];
        $show_products = $koneksi->prepare("SELECT * FROM `products` WHERE id = ?");
        $show_products->bind_param("i", $update_id);
        $show_products->execute();
        $result = $show_products->get_result();

        if ($result->num_rows > 0) {
            while ($fetch_products = $result->fetch_assoc()) {
        ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="product_id" value="<?= $fetch_products['id']; ?>">
                    <input type="hidden" name="old_kategori" value="<?= $fetch_products['kategori']; ?>">
                    <input type="hidden" name="old_gambar_1" value="<?= $fetch_products['gambar_1']; ?>">
                    <input type="hidden" name="old_gambar_2" value="<?= $fetch_products['gambar_2']; ?>">
                    <input type="hidden" name="old_gambar_3" value="<?= $fetch_products['gambar_3']; ?>">
                    <div class="image-container">
                        <div class="main-images">
                            <img src="../uploaded_files/<?= $fetch_products['gambar_1']; ?>" alt="">
                        </div>
                        <div class="sub-images">
                            <img src="../uploaded_files/<?= $fetch_products['gambar_1']; ?>" alt="">
                            <img src="../uploaded_files/<?= $fetch_products['gambar_2']; ?>" alt="">
                            <img src="../uploaded_files/<?= $fetch_products['gambar_3']; ?>" alt="">
                        </div>
                    </div>
                    <span>Product Name</span>
                    <input type="text" required placeholder="masukkan nama produk" name="nama" maxlength="100" class="box" value="<?= $fetch_products['nama']; ?>">
                    <span>Product Price</span>
                    <input type="number" min="0" max="9999999999" required placeholder="masukkan harga produk" name="harga" onkeypress="if(this.value.length == 10) return false;" class="box" value="<?= $fetch_products['harga']; ?>">
                    <span>Category</span>
                    <select name="kategori" class="box">
                        <option value="women" <?= ($fetch_products['kategori'] === 'women') ? 'selected' : ''; ?>>Women</option>
                        <option value="men" <?= ($fetch_products['kategori'] === 'men') ? 'selected' : ''; ?>>Men</option>
                        <option value="t-shirt" <?= ($fetch_products['kategori'] === 't-shirt') ? 'selected' : ''; ?>>T-Shirt</option>
                        <option value="shorts" <?= ($fetch_products['kategori'] === 'shorts') ? 'selected' : ''; ?>>Shorts</option>
                        <option value="accessories" <?= ($fetch_products['kategori'] === 'accessories') ? 'selected' : ''; ?>>Accessories</option>
                        <option value="footwear" <?= ($fetch_products['kategori'] === 'footwear') ? 'selected' : ''; ?>>Footwear</option>
                    </select>
                    <span>Product Details</span>
                    <textarea name="details" class="box" placeholder="masukkan detail produk" required maxlength="500" cols="30" rows="10"><?= $fetch_products['details']; ?></textarea>
                    <span>Picture 1</span>
                    <input type="file" name="gambar_1" class="box" accept="image/jpg, image/jpeg, image/png, image/webp">
                    <span>Picture 2</span>
                    <input type="file" name="gambar_2" class="box" accept="image/jpg, image/jpeg, image/png, image/webp">
                    <span>Picture 3</span>
                    <input type="file" name="gambar_3" class="box" accept="image/jpg, image/jpeg, image/png, image/webp">
                    <div class="flex-btn">
                        <input type="submit" value="Update" class="btn" name="update">
                        <a href="products.php" class="option-btn">Back</a>
                    </div>
                </form>
        <?php
            }
        } else {
            echo '<p class="empty">No products added!</p>';
        }
        ?>
    </section>

    <?php include '../components/footer.php' ?>

    <script src="../js/admin.js"></script>
</body>

</html>