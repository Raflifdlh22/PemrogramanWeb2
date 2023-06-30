<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer = $_POST['customer'];
    $product = $_POST['product'];
    $price = 0;
    
    if ($product == 'TV') {
        $price = 4200000;
    } elseif ($product == 'Kulkas') {
        $price = 3100000;
    } elseif ($product == 'Mesin Cuci') {
        $price = 3800000;
    }
    
    $quantity = $_POST['quantity'];
    $total_price = $price * $quantity;
    
    echo '<h3>Invoice Belanja Online</h3>';
    echo '<p>Nama Customer: ' . $customer . '</p>';
    echo '<p>Produk: ' . $product . '</p>';
    echo '<p>Harga: ' . $price . '</p>';
    echo '<p>Jumlah: ' . $quantity . '</p>';
    echo '<p>Total Harga: ' . $total_price . '</p>';
}
?>
