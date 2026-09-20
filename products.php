<?php
// products.php - Data Layer
// Menggunakan Multidimensional Associative Array (Slide 10, 11 & 17)

$katalogProduk = [
    [
        "id" => "PRD-001",
        "nama" => "Laptop Gaming Asus",
        "kategori" => "Elektronik",
        "harga" => 12500000,
        "stok" => 5,
        "deskripsi" => "Laptop performa tinggi untuk gaming dan desain"
    ],
    [
        "id" => "PRD-002",
        "nama" => "Mouse Wireless Logistics",
        "kategori" => "Aksesoris",
        "harga" => 150000,
        "stok" => 2, // Stok Kritis (< 3)
        "deskripsi" => "Mouse ergonomis tanpa kabel dengan sensor presisi"
    ],
    [
        "id" => "PRD-003",
        "nama" => "Keyboard Mekanikal RGB",
        "kategori" => "Aksesoris",
        "harga" => 450000,
        "stok" => 0, // Stok Habis (0)
        "deskripsi" => "Keyboard mekanikal dengan backlight RGB"
    ],
    [
        "id" => "PRD-004",
        "nama" => "Monitor LED 24 Inch",
        "kategori" => "Elektronik",
        "harga" => 1850000,
        "stok" => 8,
        "deskripsi" => "Monitor layar datar Full HD 1080p refresh rate 75Hz"
    ],
    [
        "id" => "PRD-005",
        "nama" => "Flashdisk 64GB USB 3.0",
        "kategori" => "Aksesoris",
        "harga" => 85000,
        "stok" => 1, // Stok Kritis (< 3)
        "deskripsi" => "Penyimpanan portable kecepatan transfer tinggi"
    ]
];
?>
