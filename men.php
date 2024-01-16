<?php
include 'database/connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/product_page.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Men | Raakdatri Indonesia</title>
    <link rel="icon" href="img/logo.svg" type="image/svg">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="homepage.php">
                    <h1 class="logo-text">Raakdatri</h1>
                </a>
            </div>

            <div class="icons">
                <a href="#" class="bi bi-search icon" id="search-icon"></a>
            </div>

            <div class="profile-dropdown">
                <div class="profile-dropdown-btn" onclick="toggleDropdown()">
                    <div class="profile-img">
                        <i class='bx bxs-circle'></i>
                    </div>
                    <span>Daffa</span>
                    <i class='bx bx-chevron-down'></i>
                </div>

                <ul class="profile-dropdown-list">
                    <li class="profile-dropdown-list-item">
                        <a href="profile.php">
                            <i class='bx bxs-user'></i>
                            Edit Profile
                        </a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <i class='bx bxs-truck'></i>
                            Orders
                        </a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="wishlist.php">
                            <i class='bx bxs-heart'></i>
                            Wishlist
                        </a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="cart.php">
                            <i class='bx bxs-cart-alt'></i>
                            Cart
                        </a>
                    </li>
                    <hr />
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <i class='bx bx-log-out'></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <form action="" id="search-form">
            <input type="search" placeholder="Find your stuff here ..." name="" id="search-box">
            <label for="search-box" class="bi bi-search" id="search-icon"></label>
            <i class="bi bi-x" id="close" onclick="closeSearchForm()"></i>
        </form>
    </header>

    <div class="category">
        <a href="homepage.php">
            <h2 class="kategori">Home</h2>
        </a>
        <a href="men.php">
            <h2 class="kategori">Category</h2>
        </a>
        <a href="#brands">
            <h2 class="kategori">Brands</h2>
        </a>
        <a href="promotion.php">
            <h2 class="kategori">Promotion</h2>
        </a>
        <a href="about.php">
            <h2 class="kategori">About</h2>
        </a>
    </div>

    <div class="CATEGORIES">
        <a href="women.php">
            <div class="categories"><img class="background" src="img/cat1.png" /></div>
        </a>
        <a href="men.php">
            <div class="categories"><img class="background" src="img/cat2.png" /></div>
        </a>
        <a href="tshirt.php">
            <div class="categories"><img class="background" src="img/cat3.png" /></div>
        </a>
        <a href="shorts.php">
            <div class="categories"><img class="background" src="img/cat4.png" /></div>
        </a>
        <a href="accessories.php">
            <div class="categories"><img class="background" src="img/cat5.png" /></div>
        </a>
        <a href="footware.php">
            <div class="categories"><img class="background" src="img/cat6.png" /></div>
        </a>
    </div>

    <section class="card" id="product-card">
        <div class="center-text">
            <h2>Men's Area</h2>
        </div>

        <div class="sorting">
            <h2 class="filter" data-category="all">All Items</h2>
            <h2 class="filter" data-category="best-seller">Best Seller</h2>
            <h2 class="filter" data-category="new-arrivals">New Arrivals</h2>
            <h2 class="filter" data-category="on-sale">On Sale</h2>
        </div>

        <div class="products">
            <?php
            // Query untuk mengambil produk dari database (diasumsikan nama tabel adalah 'products')
            $result = $koneksi->query("SELECT * FROM products WHERE kategori = 'men'");

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Display informasi produk yang diambil dari database
            ?>
                    <div class="row">
                        <img class="product-image" src="uploaded_files/<?= $row['gambar_1']; ?>" alt="">
                        <div class="price">
                            <h4><?= $row['nama']; ?></h4>
                            <p>IDR <?= number_format($row['harga'], 0, ',', '.'); ?></p>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
            <div class="row">
                <img src="img/Men/cargo 1.png" alt="">
                <div class="product-text">
                    <h5>New</h5>
                </div>
                <div class="product-text1">
                    <h5>-25%</h5>
                </div>

                <div class="price">
                    <h4>Cargo Joggers</h4>
                    <p>IDR 200,000.00</p>
                </div>
            </div>

            <div class="row">
                <img src="img/Men/denim 1.png" alt="">
                <div class="product-text">
                    <h5>-25%</h5>
                </div>

                <div class="price">
                    <h4>Printed denim Pants</h4>
                    <p>IDR 350,000.00</p>
                </div>
            </div>

            <div class="row">
                <img src="img/Men/kemeja katun 1.png" alt="">

                <div class="price">
                    <h4>Kemeja Motif Katun</h4>
                    <p>IDR 150,000.00</p>
                </div>
            </div>

            <div class="row">
                <img src="img/Men/Gambar WhatsApp 2023-10-21 pukul 00.20 1.png" alt="">

                <div class="price">
                    <h4>Cropped zip neck sweater</h4>
                    <p>IDR 300,000.00</p>
                </div>
            </div>

            <div class="row">
                <img src="img/Men/jaket 2.png" alt="">

                <div class="price">
                    <h4>Russel Athletic Leather Jacket</h4>
                    <p>IDR 550,000.00</p>
                </div>
            </div>

            <div class="row">
                <img src="img/Men/kemeja 1.png" alt="">
                <div class="product-text">
                    <h5>New</h5>
                </div>
                <div class="product-text1">
                    <h5>-25%</h5>
                </div>

                <div class="price">
                    <h4>Fit Corduroy Overshirt</h4>
                    <p>IDR 350,000.00</p>
                </div>
            </div>

            <div class="row">
                <img src="img/Men/image 353.png" alt="">

                <div class="price">
                    <h4>Guess Sweatshirt</h4>
                    <p>IDR 1,250,000.00</p>
                </div>
            </div>

            <div class="row">
                <img src="img/Men/image 358.png" alt="">

                <div class="price">
                    <h4>Levi's Denim</h4>
                    <p>IDR 950,000.00</p>
                </div>
            </div>
        </div>
    </section>

    <div class="foot">
        <footer class="FOOTER">
            <div class="overlap">
                <div class="line"></div>
                <div class="policy">
                    <div class="overlap-group">
                        <p class="order-status">
                            Order Status <br />Shipping &amp; Delivery<br />FAQ &amp; Helps&nbsp;&nbsp;<br />Terms &amp;
                            Conditions<br />Legal &amp; Privacy
                        </p>
                        <div class="text-wrapper">Need Help</div>
                    </div>
                </div>
                <div class="custommer-care">
                    <div class="clothing-tops">
                        <a href="#">Clothing</a><br />
                        <a href="#">Tops</a><br />
                        <a href="#">Sweaters</a><br />
                        <a href="#">Dresses</a><br />
                        <a href="#">Shoes</a><br />
                        <a href="#">Accessories</a>
                    </div>
                    <div class="div">Collection</div>
                </div>
                <div class="about-us">
                    <div class="overlap-2">
                        <p class="career-at-raakdatri">
                            <a href="#">About Raakdatri</a><br />
                            Contact Us<br />
                        <div class="text-wrapper-2">Company</div>
                    </div>
                </div>
                <div class="contact">
                    <div class="overlap-3">
                        <div class="overlap-4">
                            <div class="text-wrapper-3">Send us an email</div>
                            <div class="text-wrapper-4">See our stores</div>
                            <p class="p">Call Us: +62 851-2463-5482</p>
                            <div class="text-wrapper-5">Customer Services</div>
                            <img class="phone-incoming" src="img/icon/phone.svg" />
                        </div>
                        <img class="map-pin" src="img/icon/map-pin.svg" />
                        <img class="mail" src="img/icon/mail.svg" />
                    </div>
                </div>
                <div class="newsletter">
                    <div class="form">
                        <div class="overlap-group-wrapper">
                            <div class="overlap-group-2">
                                <div class="rectangle">
                                    <input type="email" placeholder="Enter your e-mail" class="email-input" />
                                    <button class="submit-button">
                                        <img class="arrow-right" src="img/icon/arrow-right.svg" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="social" src="img/icon/sosmed-1.svg" />
                    <p class="sign-up-today-and">Sign Up Today And Get $20 Off Your First Order.</p>
                </div>
            </div>
            <div class="bottom-footer">
                <p class="element-raakdatri-all">
                    <span class="span">© 2023 </span>
                    <span class="text-wrapper-7">Raakdatri</span>
                    <span class="span">. All Rights Reserved.</span>
                </p>
                <div class="line-2"></div>
            </div>
        </footer>
    </div>


    <script src="js/product_page.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>