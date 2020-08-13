<?php

$count = $_GET['count'];

date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Ymd');
$waktu = date('His');

//Setting Email Pengirim
$email_pengirim     = "kelasrobot@gmail.com";
$password_pengirim  = "*#136414574#*";
$nama_pengirim      = "Sistem Penjernih Air ";

//Setting EMail Penerima
$email_penerima = "ajangrahmat@gmail.com";  //Email Penerima

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');

$subjek = "Notifikasi Penjernih Air" . $tanggal . "-0" . $count;                            //Subjek
$pesan = "Proses Penjernihan Bact " . $tanggal . "-0" . $count . " Selesai";             //Pesan

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Username = $email_pengirim;
$mail->Password = $password_pengirim;         //Password Email Pengirim
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';

//$mail->SMTPDebug = 2;
$mail->setFrom($email_pengirim, $nama_pengirim);
$mail->addAddress($email_penerima, '');
$mail->isHTML(true);

$mail->Subject = $subjek;
$mail->Body = $pesan;

$send = $mail->send();
if ($send) {
    echo "Email berhasil dikirim";
} else {
    echo "Email gagal dikirim";
}
