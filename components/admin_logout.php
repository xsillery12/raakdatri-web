<?php

include "../database/connect.php";

setcookie('admin_id','', time() - 1, '/');
header('location:../admin/admin_login.php');

?>