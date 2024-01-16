<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/barcode.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Payment Confirmation | Raakdatri Indonesia</title>
    <link rel="icon" href="img/logo.svg" type="image/svg">
</head>

<body>

    <div class="container">
        <img class="qr-code" src="img/qr.png" alt="QR Code">
        <div class="virtual-account">Virtual Account Number: 1234567890</div>
        <div class="note">Please transfer to the virtual account above to complete the purchase. If you have made the payment, please click the "Done" button.
        </div>
        <div class="countdown">Payment Time : <span id="timer"></span></div>
        <a href="homepage.php"><button class="btn">Done</button></a>
    </div>

    <script src="js/barcode.js"></script>
</body>

</html>