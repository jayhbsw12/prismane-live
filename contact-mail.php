<?php
error_reporting(0);
ini_set('display_errors', 0);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: contact?error=invalid_request');
  exit;
}

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* ---------- Get Form Fields ---------- */
$name    = trim($_POST['name'] ?? '');
$email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$phone   = trim($_POST['phone'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || !$email || $subject === '' || $message === '') {
  header('Location: contact?error=missing_fields');
  exit;
}

/* ---------- Mail Content ---------- */
$senderLabel = $name ?: $email;
$mailSubject = 'Received Inquiry From Website: Prismane 6 - ' . $senderLabel;


$body = '
<!doctype html>
<html>
<head><meta charset="utf-8"></head>
<body style="font-family:Arial,Helvetica,sans-serif;background:#f5f5f5;padding:20px;">
  <div style="max-width:600px;margin:auto;background:#ffffff;padding:24px;border-top:4px solid #000;">
    <h2 style="margin-bottom:20px;">Received Inquiry From Website: Prismane 6 </h2>

    <p style="font-size:16px"><strong>Name:</strong> '.htmlspecialchars($name).'</p>
    <p style="font-size:16px"><strong>Email:</strong> '.htmlspecialchars($email).'</p>
    <p style="font-size:16px"><strong>Phone:</strong> '.htmlspecialchars($phone ?: 'Not provided').'</p>
    <p style="font-size:16px"><strong>Subject:</strong> '.htmlspecialchars($subject).'</p>

    <hr style="margin:20px 0;">

    <p style="font-size:16px"><strong>Message:</strong></p>
    <p style="font-size:16px">'.nl2br(htmlspecialchars($message)).'</p>

    <hr style="margin:20px 0;">
    <p style="font-size:13px;color:#777;">
      Submitted via Prismane 6 contact form.
    </p>
  </div>
</body>
</html>';

$altBody =
"New Contact Enquiry – Prismane 6\n\n".
"Name: $name\n".
"Email: $email\n".
"Phone: ".($phone ?: 'Not provided')."\n".
"Subject: $subject\n\n".
"Message:\n$message\n";

/* ---------- Send Mail ---------- */
$mail = new PHPMailer(true);

try {
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'digital@hbsoftweb.com';
  $mail->Password   = 'tutyesmmquoxmcpp';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = 587;

  $mail->CharSet = 'UTF-8';

  // From (must match Gmail account)
  $mail->setFrom('digital@hbsoftweb.com', 'HB Softweb');

  // Main receiver
  $mail->addAddress('jaymodihbsoftweb@gmail.com', 'Prismane 6');

  // CC placeholder (enable when needed)
  // $mail->addCC('someone@example.com');

  // Reply to user
  $mail->addReplyTo('info@prismane6.com', 'Prismane 6');

  $mail->isHTML(true);
  $mail->Subject = $mailSubject;
  $mail->Body    = $body;
  $mail->AltBody = $altBody;

  $mail->send();
  header('Location: thank-you.php');
  exit;

} catch (Exception $e) {
  header('Location: contact?error=mail_failed');
  exit;
}
