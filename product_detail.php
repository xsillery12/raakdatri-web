<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/product_detail.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Product Details | Raakdatri Indonesia</title>
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
        <a href="homepage.php">
            <h2 class="kategori">Home</h2>
        </a>
        <a href="women.php">
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

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <div class="product-images">
                    <img src="img/sneakers-1.png" alt="" width="40%" id="product-img">
                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="img/sneakers-1.png" alt="" width="70%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="img/sneakers-2.png" alt="" width="70%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="img/sneakers-3.png" alt="" width="70%" class="small-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="product-info">
                    <h2><a href="women.php">Category</a> / <a href="women.php">Footwear</a></h2>

                    <img src="img/ads.png" alt="" id="gambar">
                    <h1>Airwalk Tifton Men's Sneaker</h1>
                    <div class="rating">
                        <i class='bx bxs-star' style='color:#f9ff00'></i>
                        <i class='bx bxs-star' style='color:#f9ff00'></i>
                        <i class='bx bxs-star' style='color:#f9ff00'></i>
                        <i class='bx bxs-star' style='color:#f9ff00'></i>
                        <i class='bx bxs-star-half' style='color:#f9ff00'></i>
                    </div>

                    <h4>IDR 150,000.00</h4>
                    <select>
                        <option>Select Size</option>
                        <option>EUR 38</option>
                        <option>EUR 39</option>
                        <option>EUR 40</option>
                        <option>EUR 41</option>
                        <option>EUR 42</option>
                        <option>EUR 43</option>
                        <option>EUR 44</option>
                    </select>
                    <div class="number-input">
                        <button class="minus">-</button>
                        <input type="text" value="1" min="0" id="quantity">
                        <button class="plus">+</button>
                    </div>
                    <a href="cart.php" class="btn-1">Buy Now</a>
                    <a href="" class="btn-2">Add to Cart</a>

                    <h3>Product Details</h3>
                    <p>Airwalk lifestyle shoes for men, made from quality materials so they are comfortable for everyday activities.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="desc">
        <h2>Description</h2>
        <hr>
        <img src="img/desc.png" alt="">
        <h3>Size Disclaimer</h3>
        <p>There may be a 1-2cm difference in measurements depending on the development and manufacturing process.</p>
        <h3>Color Disclaimer</h3>
        <p>Actual colors may vary. This is due to the fact that every computer monitor has a different capability to display colors, we cannot guarantee that the color you see accurately portrays the true color of the product.</p>
    </div>



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


    <script src="js/product_detail.js"></script>
    <script src="js/wishlist.js"></script>
</body>

</html>