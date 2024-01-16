<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/payment.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Payment | Raakdatri Indonesia</title>
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

    <div class="head">
        <h3>Home / Shopping Cart / Payment Method</h3>

        <d class="method">
            <div class="clickable-heading-container">
                <h2 class="clickable-heading" onclick="showEWalletOptions()">E-Wallet</h2>
                <h2 class="clickable-heading" onclick="hideEWalletOptions()">Credit/Debit Card</h2>
                <h2 class="clickable-heading" onclick="hideEWalletOptions()">Virtual Account</h2>
                <h2 class="clickable-heading" onclick="hideEWalletOptions()">Others</h2>
            </div>

            <div id="ewallet_options" class="ewallet-grid">
                <label for="gopay">
                    <input type="radio" id="gopay" name="ewallet_option" value="gopay">
                    <img src="img/gopay.png" alt="GoPay">
                </label>
                <label for="ovo">
                    <input type="radio" id="ovo" name="ewallet_option" value="ovo">
                    <img src="img/ovo.png" alt="OVO">
                </label>
                <label for="shopeepay">
                    <input type="radio" id="shopeepay" name="ewallet_option" value="shopeepay">
                    <img src="img/shopee.png" alt="ShopeePay">
                </label>
                <label for="dana">
                    <input type="radio" id="dana" name="ewallet_option" value="dana">
                    <img src="img/dana.png" alt="Dana">
                </label>
            </div>

            <div class="shipping-options">
                <h2 for="shipping_method">Choose Shipping Method :</h2><br />
                <select id="shipping_method" name="shipping_option">
                    <option value="instant">Select Your Shipping</option>
                    <option value="instant">Instant (2-3 hours) - IDR 40.000</option>
                    <option value="standard">Standard (2-4 days) - IDR 8.000</option>
                    <option value="standard">Same Day (1 day) - IDR 20.000</option>
                </select>
            </div>

            <div class="total-price">
                <p>Total 2 Item</p>
                <p>IDR 505.000</p>
            </div>

            <div class="pay">
                <p>Payment Method :</p>
                <p>E-Wallet</p>
            </div>

            <div class="how-to-pay">
                <p>How to Payment :</p><br />
                <p>1. Make sure you are logged in to the E-Wallet application</p><br />
                <p>2. Open E-Wallet application on your smartphone, then select pay</p><br />
                <p>3. Point the camera at the QR code</p><br />
                <p>4. Double check your payment details in the E-Wallet application, then select pay</p><br />
                <p>5. Your transaction is complete</p>
            </div>

            <a href="barcode.php"><button class="place-order-btn">Place Order</button></a>
    </div>


    <script src="js/payment.js"></script>
</body>

</html>