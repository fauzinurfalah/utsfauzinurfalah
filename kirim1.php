<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);
    
    // Tentukan alamat email penerima
    $to = "galeriseni13@contoh.com"; // Ganti dengan alamat email penerima Anda
    $subject = "Pesan Baru dari Hubungi Kami - " . $nama; // Subjek email
    
    // Format isi pesan email
    $message = "
    <html>
    <head>
        <title>Pesan Baru dari Hubungi Kami</title>
    </head>
    <body>
        <h2>Pesan Baru dari Form Hubungi Kami</h2>
        <p><strong>Nama:</strong> $nama</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Pesan:</strong> $pesan</p>
    </body>
    </html>
    ";
    
    // Header untuk format email HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    
    // Header tambahan
    $headers .= "From: $email" . "\r\n"; // Pengirim
    
    // Kirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Terima kasih! Pesan Anda telah dikirim.";
    } else {
        echo "Maaf, terjadi kesalahan saat mengirim pesan. Silakan coba lagi.";
    }
}
?>