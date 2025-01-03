<?php
// Load PHPMailer

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['nama']);  // Ambil data nama
    $email = htmlspecialchars($_POST['email']); // Ambil email pengunjung
    $message = htmlspecialchars($_POST['pesan']); // Ambil pesan pengunjung

    // Inisialisasi PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Konfigurasi SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Server SMTP Gmail
        $mail->SMTPAuth   = true;
        $mail->Username   = 'galeriseni13@gmail.com'; // Ganti dengan email Gmail admin
        $mail->Password   = 'efbwpxmvnyljbvws'; // Ganti dengan sandi aplikasi Google
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Pengirim & Penerima
        $mail->setFrom($email, $name); // Email pengirim dari pengunjung
        $mail->addAddress('galeriseni13@gmail.com', 'Admin'); // Email penerima (admin)

        // Konten Email
        $mail->isHTML(true);
        $mail->Subject = 'Pesan Baru dari Pengunjung Website';
        $mail->Body    = "
            $message
        ";

        // Kirim Email
        $mail->send();
        header("location:index.php?alert=berhasil");
    } catch (Exception $e) {
        header("location:index.php?alert=gagal"); 
    }
} else {
    echo "Metode tidak valid.";
}
?>