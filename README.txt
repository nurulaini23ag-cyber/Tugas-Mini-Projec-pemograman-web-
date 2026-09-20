PENJELASAN & PANDUAN MINI PROJECT PHP
Mata Kuliah: Pemrograman Web (Pertemuan 2)

1. STRUKTUR FILE PROYEK
Aplikasi ini dibuat secara ringkas dan sederhana terdiri dari 4 file utama:

- config.php
  File konfigurasi untuk menyimpan data konstanta global seperti nama aplikasi dan nilai pajak PPN.

- products.php (Data Layer)
  File penampung data barang/produk menggunakan Multidimensional Associative Array.

- functions.php (Processing Layer)
  File repositori berisi fungsi-fungsi logika bisnis (hitung total nilai stok, penentu status stok, dan format rupiah).

- index.php (Presentation Layer)
  File utama yang merajut config.php, products.php, dan functions.php menggunakan require_once serta menampilkan data ke browser.


2. PENJELASAN FUNGSI & LOGIKA KODE
A. Fungsi hitungTotalNilaiStok($daftarProduk)
   - Kegunaan: Menhitung total nilai aset gudang.
   - Cara Kerja: Melakukan perulangan (foreach) pada array produk, mengalikan harga dengan jumlah stok, lalu menjumlahkan seluruh totalnya.

B. Fungsi cekStatusStok($stok)
   - Kegunaan: Menentukan kondisi stok produk berdasarkan aturan bisnis (Slide 7).
   - Aturan Logika:
     * Jika stok sama dengan 0 -> Status: Stok Habis!
     * Jika stok kurang dari 3 -> Status: Stok Kritis
     * Jika stok 3 atau lebih -> Status: Stok Aman

C. Fungsi formatRupiah($angka)
   - Kegunaan: Mengubah angka biasa menjadi format mata uang Rupiah (contoh: Rp 12.500.000).

D. Pemisahan Modular (require_once)
   - require_once: Digunakan untuk memuat file inti (config.php, products.php, functions.php) agar jika file tidak ada, aplikasi langsung berhenti (Fatal Error).


3. CARA MENJALANKAN APLIKASI
Langkah 1:
Salin folder "mini_project_php" ke dalam folder web server XAMPP Anda:
C:\xampp\htdocs\mini_project_php

Langkah 2:
Jalankan Apache pada XAMPP Control Panel.

Langkah 3:
Buka web browser (Chrome/Edge/Firefox) dan ketik alamat berikut:
http://localhost/mini_project_php/index.php

Langkah 4 (Tanpa XAMPP / Menggunakan PHP CLI):
- Buka Terminal / Command Prompt di folder proyek.
- Ketik perintah: php -S localhost:8000
- Buka browser di alamat: http://localhost:8000/index.php
