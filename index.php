<?php
// index.php - Presentation Layer (Slide 14 & 17)
require_once 'config.php';
require_once 'products.php';
require_once 'functions.php';

// Kalkulasi Total Nilai Stok Menggunakan Fungsi
$totalAsetGudang = hitungTotalNilaiStok($katalogProduk);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 20px;
            color: #000000;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        /* Judul Utama Berwarna */
        h2 {
            color: #107c41; /* Hijau Excel */
            margin-bottom: 15px;
            font-size: 22px;
            border-bottom: 2px solid #107c41;
            padding-bottom: 5px;
        }
        /* Ringkasan Atas Sederhana ala Excel */
        .ringkasan-excel {
            margin-bottom: 20px;
            font-size: 14px;
            line-height: 1.6;
            color: #000000;
        }
        .ringkasan-excel td {
            padding: 3px 15px 3px 0;
            border: none;
            color: #000000;
        }
        /* Tabel Putih Ala Excel Grid */
        table.tabel-produk {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            background-color: #ffffff;
        }
        /* Judul Kolom Tabel Berwarna */
        table.tabel-produk th {
            background-color: #107c41; /* Judul Kolom (Hijau Excel) */
            color: #ffffff;
            padding: 8px 10px;
            text-align: left;
            border: 1px solid #0e6b37;
            font-weight: bold;
        }
        /* Semua Isi Tabel Warna Hitam */
        table.tabel-produk td {
            padding: 8px 10px;
            border: 1px solid #d4d4d4;
            background-color: #ffffff !important;
            color: #000000 !important; /* Teks Hitam */
        }
        .nama-produk {
            color: #000000 !important;
            font-weight: bold;
        }
        .status-text {
            color: #000000 !important;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2><?php echo APP_NAME; ?></h2>

    <!-- Ringkasan Atas Sederhana ala Excel -->
    <table class="ringkasan-excel">
        <tr>
            <td><strong>Total Item Produk</strong></td>
            <td>: <?php echo count($katalogProduk); ?> Jenis</td>
        </tr>
        <tr>
            <td><strong>Total Nilai Aset Gudang</strong></td>
            <td>: <?php echo formatRupiah($totalAsetGudang); ?></td>
        </tr>
        <tr>
            <td><strong>Tarif PPN Standar</strong></td>
            <td>: <?php echo (PAJAK_PPN * 100); ?>%</td>
        </tr>
    </table>

    <!-- Tabel Katalog Produk -->
    <table class="tabel-produk">
        <thead>
            <tr>
                <th>Kode ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga Satuan</th>
                <th>Stok</th>
                <th>Status Inventory</th>
                <th>Deskripsi Singkat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($katalogProduk as $item): ?>
                <?php $status = cekStatusStok($item['stok']); ?>
                <tr class="<?php echo $status['css_class']; ?>">
                    <td><?php echo $item['id']; ?></td>
                    <td class="nama-produk"><?php echo $item['nama']; ?></td>
                    <td><?php echo $item['kategori']; ?></td>
                    <td><?php echo formatRupiah($item['harga']); ?></td>
                    <td><?php echo $item['stok']; ?></td>
                    <td class="status-text"><?php echo $status['label']; ?></td>
                    <td><?php echo singkatDeskripsi($item['deskripsi']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <footer style="margin-top: 30px; text-align: center; color: #7f8c8d; font-size: 0.85em;">
        <p>&copy; <?php echo date('Y'); ?> - <?php echo APP_NAME; ?> | Pemrograman Web Pertemuan 2</p>
    </footer>
</div>

</body>
</html>
