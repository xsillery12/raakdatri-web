<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/address.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Address | Raakdatri Indonesia</title>
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

    <div class="container">
        <h1>Shipping Address</h1>
        <p>Please enter your shipping details.</p>
        <hr />
        <div class="form">
            <div class="fields fields--2">
                <label class="field">
                    <span class="field__label" for="firstname">* First name</span>
                    <input class="field__input" type="text" id="firstname" />
                </label>
                <label class="field">
                    <span class="field__label" for="lastname">* Last name</span>
                    <input class="field__input" type="text" id="lastname" />
                </label>
            </div>
            <label class="field">
                <span class="field__label" for="address">* Phone Number</span>
                <input class="field__input" type="text" id="no_telp" />
            </label>
            <label class="field">
                <span class="field__label" for="address">* Address</span>
                <input class="field__input" type="text" id="address" />
            </label>
            <label class="field">
                <span class="field__label" for="country">* Country</span>
                <select class="field__input" id="country">
                    <option value=""></option>
                    <option value="indonesia">Indonesia</option>
                    <option value="malaysia">Malaysia</option>
                    <option value="singapore">Singapore</option>
                </select>
            </label>
            <div class="fields fields--3">
                <label class="field">
                    <span class="field__label" for="zipcode">* Zip code</span>
                    <input class="field__input" type="text" id="zipcode" />
                </label>
                <label class="field">
                    <span class="field__label" for="city">* City</span>
                    <input class="field__input" type="text" id="city" />
                </label>
                <label class="field">
                    <span class="field__label" for="state">* State / Province</span>
                    <input class="field__input" type="text" id="Province" />
                </label>
            </div>
        </div>
        <hr>
        <button class="button">Save & Continue</button>
    </div>

    <script src="js/script.js"></script>
</body>

</html>