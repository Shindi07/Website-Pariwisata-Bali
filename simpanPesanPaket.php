<?php
// Menghubungkan file koneksi.php untuk mengakses database
require "koneksi.php";

// Menerima data yang dikirim dari form menggunakan metode POST
$nama           = $_POST['namaForm'] ?? "";
$alamat         = $_POST['alamatForm'] ?? "";
$tujuan         = $_POST['tujuanForm'] ?? "";
$gender         = $_POST['genderForm'] ?? "";
$paket          = $_POST['paketForm'] ?? "";
$sarapan        = $_POST['sarapanForm'] ?? "";
$kendaraan      = $_POST['kendaraanForm'] ?? "";
$penginapan     = $_POST['penginapanForm'] ?? "";
$tanggal        = $_POST['tanggalForm'] ?? "";
$email          = $_POST['emailForm'] ?? "";
$hp             = $_POST['hpForm'] ?? "";
$tangglpesan    = date('Y-m-d');



echo $periksa = "('$nama','$alamat', '$tujuan','$gender','$paket', '$sarapan','$kendaraan ','$penginapan ','$tanggal ','$email  ','$hp  ','$tangglpesan ')";

// Menyimpan data ke dalam tabel 'pemesanan' di database
$simpanDb = mysqli_query($sql, "INSERT INTO pemesanan(nama,alamat,tujuan,gender,paket, sarapan,kendaraan,penginapan,tanggal,email,hp) VALUES ('$nama','$alamat', '$tujuan','$gender','$paket', '$sarapan','$kendaraan ','$penginapan ','$tanggal ','$email  ','$hp ')");

// Mengecek apakah query berhasil dieksekusi
if (!empty($simpanDb)) {
    // Jika berhasil, tampilkan pesan sukses dan arahkan kembali ke halaman tabel pemesanan
    echo "<script>alert('Data Berhasil Tampil');window.location.href='index.php?page=tabelpesanPaket';</script>";
} else {
    // Jika gagal, tampilkan pesan error dan arahkan kembali ke halaman form pemesanan
    echo "<script>alert('Beberapa Data Gagal Tampil');window.location.href='index.php?page=pesanPaket';</script>";
}
