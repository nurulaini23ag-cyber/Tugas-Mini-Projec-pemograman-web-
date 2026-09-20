<?php
// functions.php - Processing Layer / Repositori Fungsi (Slide 9 & 14)

/**
 * Mengalkulasi total nilai seluruh aset stok di gudang (Slide 17)
 */
function hitungTotalNilaiStok($daftarProduk) {
    $totalNilai = 0;
    foreach ($daftarProduk as $item) {
        $totalNilai += ($item["harga"] * $item["stok"]);
    }
    return $totalNilai;
}

/**
 * Logika Conditional untuk menentukan status stok & kelas warna teks (Slide 7 & 17)
 */
function cekStatusStok($stok) {
    if ($stok === 0) {
        return [
            "label" => "Stok Habis!",
            "css_class" => "stok-habis" // Teks Merah
        ];
    } elseif ($stok < 3) {
        return [
            "label" => "Stok Kritis (" . $stok . ")",
            "css_class" => "stok-kritis" // Teks Oranye
        ];
    } else {
        return [
            "label" => "Stok Aman (" . $stok . ")",
            "css_class" => "stok-aman" // Teks Hijau
        ];
    }
}

/**
 * Helper untuk format angka ke Rupiah
 */
function formatRupiah($angka) {
    return MATA_UANG . " " . number_format($angka, 0, ',', '.');
}

/**
 * Contoh manipulasi string menggunakan strlen & substr (Slide 12)
 */
function singkatDeskripsi($deskripsi, $maksimalKarakter = 30) {
    if (strlen($deskripsi) > $maksimalKarakter) {
        return substr($deskripsi, 0, $maksimalKarakter) . "...";
    }
    return $deskripsi;
}
?>
