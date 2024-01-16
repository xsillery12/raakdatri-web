<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>About | Raakdatri Indonesia</title>
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
    </header>

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

    <div class="box">
        <div class="head">
            <div class="teks">
                <div class="teks-wrapper">About Us</div>
                <div class="flex-container">
                    <p class="text">
                        <span class="span">Welcome to Raakdatri - Where Fashion Meets You!<br /></span>
                    </p>
                    <p class="text">
                        <span class="teks-wrapper-2">At Raakdatri, we're more than just an online fashion marketplace, we're your ultimate
                            destination to discover, express, and embrace your unique style. We believe that fashion is a powerful
                            form of self-expression, and our mission is to empower you to stand out, feel confident, and be yourself
                            through our carefully curated collection of fashion essentials.</span>
                    </p>
                </div>
            </div>
            <img class="gambar" src="img/about-1.png">
        </div>
    </div>

    <div class="frame">
        <div class="text-wrapper">Our Story</div>
        <p class="tulisan">
            Founded in 2023, Raakdatri was born out of a passion for fashion and a desire to make the latest trends and
            timeless classics accessible to all. Our name, "Raakdatri" reflects our commitment to helping you find
            the perfect fashion pieces that truly resonate with your style, because "Raakdatri" means "Your
            Fashion" in Sanskrit.
        </p>
    </div>

    <div class="frame">
        <div class="text-wrapper">Our Vision</div>
        <p class="tulisan">
            We envision a world where fashion is inclusive, sustainable, and driven by individuality. That&#39;s why we work
            tirelessly to bring you an eclectic mix of styles, sizes, and designs, sourced from both renowned brands and
            emerging designers. From everyday wear to occasion-specific ensembles, Raakdatri has you covered for every facet
            of your life.
        </p>
    </div>

    <div class="frame">
        <div class="text-wrapper">Quality & Customer Satisfaction</div>
        <p class="tulisan">
            We stand firmly behind the quality of our products and the satisfaction of our customers. Our team is dedicated
            to ensuring your shopping experience is seamless and delightful, from the moment you browse our selection to the
            swift and secure delivery of your order.
        </p>
    </div>

    <div class="frame">
        <p class="text-wrapper">Join Us on the Fashion Journey</p>
        <div class="label">
            <div class="flexcontainer">
                <!-- <p class="text">
                    <span class="text-wrapper-1">Join Us on the Fashion Journey<br /></span>
                </p> -->
                <p class="text">
                    <span class="text-wrapper-1">Thank you for choosing Raakdatri as your fashion destination. We invite you to embark on this exciting
                        fashion journey with us, explore the beauty of self-expression through clothing, and let your style
                        shine.<br /></span>
                </p>
                <p class="text">
                    <span class="text-wrapper-1">Follow us on social media and be a part of our ever-growing fashion community. Feel free to reach out to
                        our customer support team for any assistance or questions. Your trust and support mean the world to us.<br /></span>
                </p>
                <p class="text">
                    <span class="text-wrapper-1">Together, let's redefine fashion, celebrate individuality, and create unforgettable style moments with
                        Raakdatri!<br /></span>
                </p>
                <p class="text">
                    <span class="text-wrapper-1">Warm regards,<br /><br /><br /></span>
                </p>
                <p class="text"><span class="text-wrapper-1">The Raakdatri Team</span></p>
            </div>
        </div>
    </div>

    <div class="box-1">
        <div class="group">
            <div class="text-wrapper-1">The Raakdatri Team</div>
            <div class="daffa">
                <div class="flex-container">
                    <p class="txt">
                        <span class="span">Muhammad Daffa Fachreza<br /></span>
                    </p>
                    <p class="txt">
                        <span class="text-wrapper-2">10121799<br /></span>
                    </p>
                    <p class="txt"><span class="text-wrapper-2">Front-End Web Developer</span></p>
                </div>
                <img class="gambar" src="img/daffa.png" />
            </div>
            <div class="kev">
                <div class="flex-container">
                    <p class="txt">
                        <span class="span">Kevinta Thabina Alifah<br /></span>
                    </p>
                    <p class="txt">
                        <span class="text-wrapper-2">10121645<br /></span>
                    </p>
                    <p class="txt"><span class="text-wrapper-2">UI/UX Designer 1</span></p>
                </div>
                <img class="gambar" src="img/kev.png" />
            </div>
            <div class="putry">
                <div class="flex-container">
                    <p class="txt">
                        <span class="span">Putry Wulandari<br /></span>
                    </p>
                    <p class="txt">
                        <span class="text-wrapper-2">11121033<br /></span>
                    </p>
                    <p class="txt"><span class="text-wrapper-2">UI/UX Designer 2</span></p>
                </div>
                <img class="gambar" src="img/putry.png" />
            </div>
            <div class="baras">
                <img class="gambar" src="img/baras.png" />
                <div class="flex-container">
                    <p class="txt">
                        <span class="span">Muhammad Rafly Baras<br /></span>
                    </p>
                    <p class="txt">
                        <span class="text-wrapper-2">11121394<br /></span>
                    </p>
                    <p class="txt"><span class="text-wrapper-2">Project Assistant</span></p>
                </div>
            </div>
            <div class="afaaiz">
                <img class="gambar" src="img/afaiz.png" />
                <div class="flex-container">
                    <p class="txt">
                        <span class="span">Afaaiz Raya Fadhlullah<br /></span>
                    </p>
                    <p class="txt">
                        <span class="text-wrapper-2">10121052<br /></span>
                    </p>
                    <p class="txt"><span class="text-wrapper-2">Back-end Web Developer</span></p>
                </div>
            </div>
            <div class="agus">
                <img class="gambar" src="img/agus.jpg" />
                <div class="flex-container">
                    <p class="txt">
                        <span class="span">Agus Setiawan<br /></span>
                    </p>
                    <p class="txt">
                        <span class="text-wrapper-2">10121068<br /></span>
                    </p>
                    <p class="txt"><span class="text-wrapper-2">Participant</span></p>
                </div>
            </div>
        </div>
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
                            <a href="{{ route('about') }}">About Raakdatri</a><br />
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
        </section>



        <script src="js/script.js"></script>
</body>

</html>