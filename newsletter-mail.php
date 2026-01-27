<?php
error_reporting(0);
ini_set('display_errors', 0);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: index.php?subscribed=0');
  exit;
}

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* ---------- Get Email ---------- */
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);

if (!$email) {
  header('Location: index.php?subscribed=0');
  exit;
}

/* ---------- Mail Content ---------- */
$senderLabel = $email;
$mailSubject = 'Received Newsletter Request From Website: Prismane 6 - ' . $senderLabel;


$body = '
<!doctype html>
<html>
<head><meta charset="utf-8"></head>
<body style="font-family:Arial,Helvetica,sans-serif;background:#f5f5f5;padding:20px;">
  <div style="max-width:600px;margin:auto;background:#ffffff;padding:24px;border-top:4px solid #000;">
    <h2 style="margin-bottom:20px;">Received Newsletter Request From Website: Prismane 6</h2>

    <p style="font-size:16px;">
      <strong>Email:</strong> '.htmlspecialchars($email).'
    </p>

    <hr style="margin:20px 0;">

    <p style="font-size:13px;color:#777;">
      This subscription was submitted via the Prismane 6 website footer.
    </p>
  </div>
</body>
</html>';

$altBody =
"New Newsletter Subscription – Prismane 6\n\n".
"Email: $email\n";

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

  // From must match Gmail
  $mail->setFrom('digital@hbsoftweb.com', 'Prismane 6');

  // Receiver (same as contact)
  $mail->addAddress('jaymodihbsoftweb@gmail.com', 'Prismane 6');

  // Optional CC placeholder
  // $mail->addCC('someone@example.com');

  // Reply-to website email
  $mail->addReplyTo('info@prismane6.com', 'Prismane 6');

  $mail->isHTML(true);
  $mail->Subject = $mailSubject;
  $mail->Body    = $body;
  $mail->AltBody = $altBody;

  $mail->send();

  header('Location: thank-you.php?subscribed=1');
  exit;

} catch (Exception $e) {
  header('Location: index.php?subscribed=0');
  exit;
}
