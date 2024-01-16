<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home | Raakdatri Indonesia</title>
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
                <span>User</span>
                <i class='bx bx-chevron-down'></i>
            </div>

            <ul class="profile-dropdown-list">
                <li class="profile-dropdown-list-item">
                    <a href="user_login.php">
                        <i class='bx bxs-log-in'></i>
                        Login
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

    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">

            <div class="slide first">
                <img src="img/ads1.png" alt="">
            </div>
            <div class="slide">
                <img src="img/ads2.png" alt="">
            </div>
            <div class="slide">
                <img src="img/ads3.png" alt="">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>

            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="TRENDING">
            <div class="heading">
                <p class="text-wrapper">SPEED DEALS ONLY 3 HOURS</p>
                <p class="div">Top sale on this day</p>
            </div>
            <div class="list-categories">
                <div class="categories">
                    <div class="text-wrapper-2">Bottoms</div>
                    <div class="overlap">
                        <div class="background"></div>
                        <img class="img" src="img/background-4.png" />
                        <img class="image" src="img/image-336.png" />
                        <div class="rectangle"></div>
                        <img class="image-2" src="img/merk-5.png" />
                        <div class="discount">
                            <div class="-2">
                                <div class="ellipse"></div>
                                <div class="element-off">30%<br />off</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories-2">
                    <div class="text-wrapper-3">Sneakers</div>
                    <div class="overlap-2">
                        <div class="background"></div>
                        <img class="img" src="img/background-4.png" />
                        <div class="rectangle"></div>
                        <img class="element" src="img/sepatu-1.png" />
                        <img class="converse" src="img/merk-1.png" />
                        <div class="discount">
                            <div class="-2">
                                <div class="ellipse"></div>
                                <div class="element-off">30%<br />off</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories-3">
                    <div class="text-wrapper-4">Sport Jacket</div>
                    <div class="overlap-3">
                        <div class="background-2"></div>
                        <img class="background-3" src="img/background-4.png" />
                        <div class="rectangle-2"></div>
                        <img class="jaket" src="img/jaket-1.png" />
                        <img class="adidas-logo" src="img/merk-2.png" />
                        <div class="discount">
                            <div class="overlap-group">
                                <div class="ellipse"></div>
                                <div class="element-off">30%<br />off</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories-4">
                    <div class="text-wrapper-5">Shoulder Bag</div>
                    <div class="overlap-4">
                        <div class="background-4"></div>
                        <img class="background-3" src="img/background-4.png" />
                        <div class="rectangle-2"></div>
                        <img class="img-2" src="img/tas-1.png" />
                        <img class="hnm" src="img/merk-3.png" />
                        <div class="discount">
                            <div class="overlap-group">
                                <div class="ellipse"></div>
                                <div class="element-off">30%<br />off</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories-5">
                    <div class="text-wrapper-6">Female Skirt</div>
                    <div class="overlap-5">
                        <div class="background-4"></div>
                        <img class="background-5" src="img/background-4.png" />
                        <img class="gambar-whatsapp" src="img/rok-1.png" />
                        <div class="rectangle-2"></div>
                        <img class="zara" src="img/merk-4.png" />
                        <div class="discount">
                            <div class="overlap-group">
                                <div class="ellipse"></div>
                                <div class="element-off">30%<br />off</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="box-2">
        <div class="group">
            <div class="shop-by-categories">
                <div class="heading">
                    <div class="text-wrapper">People's Love to buy</div>
                    <div class="div">Favorites Collection</div>
                </div>
            </div>
            <div class="fav">
                <div class="products">
                    <div class="baju">
                        <div class="ovlap-1">
                            <div class="img-product">
                                <div class="ovlap-2">
                                    <div class="bg-1"></div>
                                    <img class="p-1" src="img/zara-dress-1.png" />
                                </div>
                            </div>
                            <div class="detail">
                                <div class="text-wrapper-4">Draped Midi Dress</div>
                                <div class="text-wrapper-5">IDR 700,000</div>
                                <div class="text-wrapper-6">IDR 1,099,000</div>
                            </div>
                            <div class="label">
                                <div class="overlap-group-2">
                                    <div class="twrap">NEW</div>
                                </div>
                            </div>
                            <div class="overlap-wrapper">
                                <div class="div-wrapper">
                                    <div class="twrap-2">-25%</div>
                                </div>
                            </div>
                        </div>
                        <div class="baju-2">
                            <div class="div2">
                                <div class="div2">
                                    <div class="ovlap-3">
                                        <div class="bg-2"></div>
                                        <img class="p-2" src="img/dress-2.png" />
                                    </div>
                                </div>
                                <div class="overlap-group-wrapper">
                                    <div class="div-wrapper">
                                        <div class="text-wrapper-7">-25%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-2">
                                <p class="text-wrapper-4">Wrap Shirt With Knot Detail</p>
                                <div class="text-wrapper-8">IDR 585,000</div>
                                <div class="text-wrapper-9">IDR 600,000</div>
                            </div>
                        </div>
                        <div class="sepatu">
                            <div class="ovlap-4">
                                <div class="img-wrapper"><img class="p-3" src="img/sepatu-2.png" /></div>
                                <div class="label-2">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-10">-25%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-3">
                                <p class="p">New Balance 550 White Black</p>
                                <div class="ovlap-5">
                                    <div class="text-wrapper-11">IDR 1,500,000</div>
                                    <div class="text-wrapper-12">IDR 2,000,000</div>
                                </div>
                            </div>
                        </div>
                        <div class="topi">
                            <div class="ovlap-4">
                                <div class="img-wrapper"><img class="p-4" src="img/topi-1.png" /></div>
                                <div class="label-3">
                                    <div class="overlap-group-3">
                                        <div class="text-wrapper-13">-25%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-4">
                                <div class="ovlap-6">
                                    <div class="text-wrapper-14">Venice Beach Trucker Cap</div>
                                    <div class="text-wrapper-15">IDR 199,000</div>
                                    <div class="text-wrapper-16">IDR 200,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="products-2">
                        <div class="rok">
                            <div class="ovlap-2">
                                <div class="label-4">
                                    <div class="overlap-group-2">
                                        <div class="text-wrapper-17">-25%</div>
                                    </div>
                                </div>
                                <div class="img-wrapper">
                                    <img class="p-5" src="img/rok-2.png" />
                                </div>
                                <div class="overlap-group-wrapper">
                                    <div class="div-wrapper">
                                        <div class="text-wrapper-18">NEW</div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-5">
                                <div class="text-wrapper-2c">Pleated Skirt With Belt</div>
                                <div class="text-wrapper-19">IDR 712,500</div>
                                <div class="text-wrapper-20">IDR 950,000</div>
                            </div>
                        </div>
                        <div class="jaket-2">
                            <div class="div3">
                                <div class="div3">
                                    <div class="overlap-group-6">
                                        <div class="bg-3">
                                            <img class="p-6" src="img/jaket-2.png" />
                                        </div>
                                    </div>
                                    <div class="label-5">
                                        <div class="overlap-group-2">
                                            <div class="text-wrapper-21">-25%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-6">
                                    <div class="text-wrapper-2z">Faux Shearling Lapel Jacket</div>
                                    <div class="overlap-group-7">
                                        <div class="text-wrapper-22">IDR 3,999,000</div>
                                        <div class="text-wrapper-23">IDR 5,000,000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="jas">
                                <div class="div4">
                                    <div class="div4">
                                        <div class="overlap-group-8">
                                            <div class="bg-4"></div>
                                            <img class="p-7" src="img/jas-1.png" />
                                        </div>
                                    </div>
                                    <div class="label-6">
                                        <div class="overlap-group-a">
                                            <div class="text-wrapper-10">-25%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-7">
                                    <div class="herringbone-wool">Herringbone Wool-blend Blazer</div>
                                    <div class="overlap-5">
                                        <div class="text-wrapper-111">IDR 2,999,000</div>
                                        <div class="text-wrapper-24">IDR 3,299,000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="review-container">
        <div class="testi">
            <div class="headings">
                <div class="div-wrap">
                    <div class="teks-wrapper">What People Are Saying</div>
                </div>
            </div>
            <div class="elemen">
                <div class="olap">
                    <div class="teks">
                        <div class="olap-group">
                            <p class="divv">
                                Pengiriman sangat cepat, barang original sudah cek barcode. Topi sangan nyaman dipakai untuk dipakai
                                panas panasan, tks seller👍
                            </p>
                            <div class="teks-wrapper-2">Venice Beach Trucker Cap</div>
                        </div>
                    </div>
                    <div class="user">
                        <div class="headings-2">Kevinta</div>
                        <div class="teks-wrapper-3">August 13, 2023</div>
                        <img class="primary-fill" src="img/icon/primary-fill-1.svg">
                    </div>
                    <div class="gambar"><img class="foto" src="img/review-1.png" /></div>
                    <div class="star">
                        <img class="favorite-major" src="img/icon/star.svg" />
                        <img class="favorite-major-2" src="img/icon/star.svg" />
                        <img class="favorite-major-3" src="img/icon/star.svg" />
                        <img class="favorite-major-4" src="img/icon/star.svg" />
                        <img class="favorite-major-5" src="img/icon/star.svg" />
                    </div>
                </div>
            </div>
            <div class="olap-wrapper">
                <div class="olap">
                    <div class="teks">
                        <div class="olap-group">
                            <p class="paragraf">100% Ori dijamin, pas dibadan dan dihati saya, sama sama membanteng! ty min~! ♥</p>
                            <div class="teks-wrapper-2">100% Cotton Blackbull T-shirt</div>
                        </div>
                    </div>
                    <div class="user-2">
                        <div class="olap-2">
                            <div class="headings-3">Rafli Baras</div>
                            <img class="primary-fill-2" src="img//icon/primary-fill-1.svg" />
                        </div>
                        <div class="teks-wrapper-3">January 20, 2023</div>
                    </div>
                    <div class="image-wrapper"><img class="foto" src="img/baju-1.png" /></div>
                    <div class="star">
                        <img class="favorite-major" src="img/icon/star.svg" />
                        <img class="favorite-major-2" src="img/icon/star.svg" />
                        <img class="favorite-major-3" src="img/icon/star.svg" />
                        <img class="favorite-major-4" src="img/icon/star.svg" />
                        <img class="favorite-major-5" src="img/icon/star.svg" />
                    </div>
                </div>
            </div>
            <div class="olap-group-wrapper">
                <div class="olap">
                    <div class="teks">
                        <div class="olap-group">
                            <p class="paragraf">Barang oke, pengiriman 2 jam sampe. Kurir ramah. Kualitas bintang 5. Top Markotop!!!</p>
                            <p class="teks-wrapper-4">New Balance 550 White Black</p>
                        </div>
                    </div>
                    <div class="user-wrapper">
                        <div class="user-3">
                            <div class="headings-4">Daffa Fachreza</div>
                            <div class="teks-wrapper-3">October 12, 2023</div>
                            <img class="primary-fill-3" src="img//icon/primary-fill-1.svg">
                        </div>
                    </div>
                    <div class="img-wrapper"><img class="foto" src="img/review-2.png" /></div>
                    <div class="star">
                        <img class="favorite-major" src="img/icon/star.svg" />
                        <img class="favorite-major-2" src="img/icon/star.svg" />
                        <img class="favorite-major-3" src="img/icon/star.svg" />
                        <img class="favorite-major-4" src="img/icon/star.svg" />
                        <img class="favorite-major-5" src="img/icon/star.svg" />
                    </div>
                </div>
                <div class="elemen-2">
                    <div class="olap">
                        <div class="teks">
                            <div class="olap-group">
                                <p class="teks-wrapper-5">Real pict. Pengiriman cepat. Harga sesuai.</p>
                                <div class="teks-wrapper-6">Pleated Skirt With Belt</div>
                            </div>
                        </div>
                        <div class="user-4">
                            <div class="olap-3">
                                <div class="headings-5">Aafaiz</div>
                                <img class="primary-fill-4" src="img/icon/primary-fill-1.svg">
                            </div>
                            <div class="teks-wrapper-3">March 4, 2023</div>
                        </div>
                        <div class="gambar-2"><img class="foto" src="img/review-3.png"></div>
                        <div class="star">
                            <img class="favorite-major" src="img/icon/star.svg" />
                            <img class="favorite-major-2" src="img/icon/star.svg" />
                            <img class="favorite-major-3" src="img/icon/star.svg" />
                            <img class="favorite-major-4" src="img/icon/star.svg" />
                            <img class="favorite-major-5" src="img/icon/star.svg" />
                        </div>
                    </div>
                    <div class="elemen-3">
                        <div class="olap">
                            <div class="teks-2">
                                <div class="olap-group-2">
                                    <p class="teks-wrapper-7">Dressnya cantik simple elegan, bahannya adem, pokonya the best pokonya</p>
                                    <div class="prod1">Draped Midi Dress</div>
                                </div>
                            </div>
                            <div class="user-5">
                                <div class="teks-wrapper-8">May 23, 2023</div>
                                <img class="primary-fill-5" src="img/icon/primary-fill-1.svg">
                                <div class="headings-6">Putry Wulandari</div>
                            </div>
                            <div class="whatsapp-image-wrapper">
                                <img class="whatsapp-image" src="img/review-4.png" />
                            </div>
                        </div>
                        <div class="star-2">
                            <img class="favorite-major" src="img/icon/star.svg" />
                            <img class="favorite-major-2" src="img/icon/star.svg" />
                            <img class="favorite-major-3" src="img/icon/star.svg" />
                            <img class="favorite-major-4" src="img/icon/star.svg" />
                            <img class="favorite-major-5" src="img/icon/star.svg" />
                        </div>
                    </div>
                    <div class="elemen-4">
                        <div class="olap-4">
                            <div class="teks-3">
                                <div class="olap-group-3">
                                    <p class="teks-wrapper-9">Alhamdulillah pengiriman sangat aman, tdk ada yang lecet. Anak sy sngt puas utk pamer di sekolahan.
                                        tks admin raakdatri💋</p>
                                    <div class="teks-wrapper-10">Mixue Bottle</div>
                                </div>
                            </div>
                            <div class="user-6">
                                <div class="headings-7">Hamba Allah</div>
                                <div class="teks-wrapper-11">July 22, 2023</div>
                            </div>
                            <img class="gambar-4" src="img/review-5.png">
                            <div class="star-3">
                                <img class="favorite-major" src="img/icon/star.svg" />
                                <img class="favorite-major-2" src="img/icon/star.svg" />
                                <img class="favorite-major-3" src="img/icon/star.svg" />
                                <img class="favorite-major-6" src="img/icon/star.svg" />
                                <img class="favorite-major-7" src="img/icon/star.svg" />
                            </div>
                        </div>
                    </div>
                </div>
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

    <script src="js/script.js"></script>
</body>

</html>