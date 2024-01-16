<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Your Orders | Raakdatri Indonesia</title>
    <link rel="icon" href="img/logo.svg" type="image/svg">
</head>

<body>

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
                    <a href="order.php">
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
                    <a href="home.php">
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

    <div class="category">
        <div class="menu-item">
            <a href="homepage.php">
                <h2 class="kategori">Home</h2>
            </a>
        </div>
        <div class="menu-item">
            <a href="women.php">
                <h2 class="kategori">Category</h2>
            </a>
        </div>
        <div class="menu-item dropdown">
            <a href="#brands">
                <h2 class="kategori dropdown-toggle">Brands</h2>
            </a>
            <div class="dropdown-content">
                <!-- Di sini letakkan gambar-gambar dari brand 5x4 -->
                <div class="brand-grid">
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand1.png" alt="Brand 1">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand2.png" alt="Brand 2">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand3.png" id="line" alt="Brand 3">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand4.png" id="line3" alt="Brand 4">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand5.png" id="line1" alt="Brand 5">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand6.png" id="line" alt="Brand 6">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand7.png" alt="Brand 7">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand8.png" id="line2" alt="Brand 8">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand9.png" id="line4" alt="Brand 9">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand10.png" id="line2" alt="Brand 10">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand11.png" id="line" alt="Brand 11">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand12.png" id="line5" alt="Brand 12">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand13.png" id="line3" alt="Brand 13">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand14.png" id="line3" alt="Brand 14">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand15.png" id="line6" alt="Brand 15">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand16.png" id="line7" alt="Brand 16">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand17.png" id="line8" alt="Brand 17">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand18.png" id="line2" alt="Brand 18">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand19.png" id="line9" alt="Brand 19">
                    </div>
                    <div class="brand-item">
                        <!-- Gambar Brand 1 -->
                        <img src="img/gambar-brand20.png" id="line10" alt="Brand 20">
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <a href="promotion.php">
                <h2 class="kategori">Promotion</h2>
            </a>
        </div>
        <div class="menu-item">
            <a href="about.php">
                <h2 class="kategori">About</h2>
            </a>
        </div>
    </div>

    <div class="trans-container">
        <h1>Purchase Transaction List</h1>
        <div class="search-filter">
            <input type="text" id="searchInput" placeholder="Cari transaksi...">
            <select id="filterSelect">
                <option value="all">All</option>
                <option value="pending">Waiting for Payment</option>
                <option value="shipping">On Delivery</option>
                <option value="completed">Arrived</option>
            </select>
            <button onclick="filterTransactions()">Filter</button>
        </div>

        <div class="container">
            <h2>January 1, 2024 - INV/20240101/XYZ123</h2>
            <div class="status-box">
                <p>Delivery Status: On Delivery</p>
            </div>
            <img src="img/sepatu-3.png" alt="">
            <p>Airwalk Tifton Men's Sneaker</p>
            <div class="product-info">
                <div class="price">Price : IDR 150.000,00</div>
                <button class="detail-button" id="openPopupButton">Details</button>
            </div>
        </div>

        <div id="popupContainer">
            <div id="popupContent">
                <h2>Transaction Details</h2>
                <hr>
                <section class="detail">
                    <p><strong>Invoice :</strong> INV/20240101/XYZ123</p>
                    <p><strong>Purchase Date :</strong> January 1, 2024 15:57 WIB</p>
                </section>
                <div class="item">
                    <div class="product-item">
                        <img src="img/sepatu-3.png" alt="Produk 1">
                        <div class="product-info">
                            <p class="product-name">Airwalk Tifton Men's Sneaker</p>
                            <p class="product-price">1 x IDR 150.000,00</p>
                        </div>
                    </div>
                </div>
                <div class="shipping-info">
                    <p><strong>Shipping Info :</strong></p>
                    <table>
                        <tr>
                            <td>Shipping Method</td>
                            <td>:</td>
                            <td>Standard</td>
                        </tr>
                        <tr>
                            <td>Receipt Number</td>
                            <td>:</td>
                            <td>YGCB2941830DN2</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>Jakarta</td>
                        </tr>
                    </table>
                </div>
                <div class="payment-details">
                    <p><strong>Payment Details :</strong></p>
                    <table>
                        <tr>
                            <td>Payment Method</td>
                            <td>:</td>
                            <td>E-Wallet (ShopeePay)</td>
                        </tr>
                        <tr>
                            <td>Total Price</td>
                            <td>:</td>
                            <td>IDR 150.000,00</td>
                        </tr>
                        <tr>
                            <td>Total Shipping Cost</td>
                            <td>:</td>
                            <td>IDR 8.000,00</td>
                        </tr>
                        <tr>
                            <td>Total Shopping</td>
                            <td>:</td>
                            <td>IDR 170.000,00</td>
                        </tr>
                    </table>
                </div>
                <button id="closePopupButton">Close</button>
            </div>
        </div>

        <script src="js/order.js"></script>
</body>

</html>