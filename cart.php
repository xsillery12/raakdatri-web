<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Cart | Raakdatri Indonesia</title>
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
        <h3>Home / Shopping Cart</h3>
        <h2>Cart (1)</h2>
        <div class="address">
            <h2>SHIPPING ADDRESS</h2>
            <p><a href="address.php">Select your shipping address</a></p>
        </div>

        <div class="section-wrapper">
            <div id="cart" class="section-p1">
                <table width="40%">
                    <tbody>
                        <tr>
                            <td><a href=""><i class='bx bx-trash'></i></a></td>
                            <td><img src="img/sepatu-3.png" alt=""></td>
                            <td>Airwalk Tifton Men's Sneaker</td>
                            <td>IDR 150.000,00</td>
                            <td><input type="number" value="1"></td>
                            <td>IDR 150.000,00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="cart-add" class="section-p1">
                <div id="coupon">
                    <h3><i class='bx bxs-discount' ></i>Cashback and Voucher</h3>
                    <div>
                        <input type="text" placeholder="Add a discount code">
                        <button class="normal">Apply</button>
                    </div>
                </div>

                <div id="subtotal">
                    <h3>Orders Summary</h3>
                    <table>
                        <tr>
                            <td class="border-bottom">Products Total (1)</td>
                            <td class="border-bottom">IDR 150.000,00</td>
                        </tr>
                        <tr>
                            <td>Discount Amount</td>
                        </tr>
                        <tr>
                            <td>2 Voucher Applied</td>
                            <td><span>-IDR 32.500,00</span></td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                        </tr>
                        <tr>
                            <td class="border-bottom" colspan="2">Jl. Gandaria Tengah RT06/RW04 Jakarta Selatan</td>
                        </tr>
                        <tr>
                            <td><strong>Total</strong> (Include TAX)</td>
                            <td><strong>IDR 117.500,00</strong></td>
                        </tr>
                    </table>
                    <a href="payment.php"><button class="normal">Continue to Checkout</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="foot">
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
    </div> -->

    <script src="js/script.js"></script>
</body>

</html>