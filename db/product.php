<?php

// $sql = "SELECT `numphone`,`username`,`password`,`email` FROM `users`";
// $result = mysqli_query($conn, $sql);
// $list_user = array();
// $num = mysqli_num_rows($result);
// for ($i=0; $i < $num; $i++) { 
//     # code...
//     $list_user[] = mysqli_fetch_assoc($result);

// }

$sql = "SELECT  `title`, `price`, `product_desc`, `thumb`  FROM `product`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
$list_product = array();

for ($i=0; $i < $num; $i++) { 
    # code...
    $list_product[] = mysqli_fetch_assoc($result);
}