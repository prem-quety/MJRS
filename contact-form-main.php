<!-- contact-form-main.php -->
<?php
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['error' => 'Invalid request method']);
  exit;
}

function clean($v)
{
  return htmlspecialchars(trim($v), ENT_QUOTES, 'UTF-8');
}

$name = clean($_POST['name'] ?? '');
$email = clean($_POST['email'] ?? '');
$subject = clean($_POST['subject'] ?? 'General Inquiry');
$message = clean($_POST['message'] ?? '');

if (!$name || !$email || !$message) {
  http_response_code(400);
  echo json_encode(['error' => 'Please fill out all required fields.']);
  exit;
}

// Build styled HTML email
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Client Inquiry</title>
</head>
<body style="margin:0;padding:0;background-color:#f9fafb;font-family:Arial,Helvetica,sans-serif;">
  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
    <tr>
      <td align="center" style="padding:40px 0;">
        <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="background:#ffffff;border-radius:10px;box-shadow:0 4px 15px rgba(0,0,0,0.08);overflow:hidden;">
          <tr>
            <td style="background:#a60000;color:#ffffff;padding:22px 30px;text-align:center;">
              <h1 style="margin:0;font-size:22px;font-weight:700;">MJRS Associates - Client Inquiry</h1>
            </td>
          </tr>
          <tr>
            <td style="padding:30px;">
              <p style="font-size:16px;color:#333;margin:0 0 20px;">A new inquiry has been submitted from your website:</p>
              <table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top:10px;">
                <tr><td style="font-weight:bold;padding:8px 0;width:160px;color:#555;">Full Name:</td><td style="color:#111;">' . $name . '</td></tr>
                <tr><td style="font-weight:bold;padding:8px 0;color:#555;">Email:</td><td style="color:#111;">' . $email . '</td></tr>
                <tr><td style="font-weight:bold;padding:8px 0;color:#555;">Subject:</td><td style="color:#111;">' . $subject . '</td></tr>
                <tr><td style="font-weight:bold;padding:8px 0;color:#555;vertical-align:top;">Message:</td><td style="color:#111;line-height:1.6;">' . nl2br($message) . '</td></tr>
              </table>
              <p style="margin-top:30px;font-size:14px;color:#888;">This message originated from the "Get in Touch" form on the MJRS Associates website.</p>
            </td>
          </tr>
          <tr>
            <td style="background:#f3f3f3;padding:15px;text-align:center;font-size:13px;color:#777;">
              © ' . date("Y") . ' MJRS Associates. All rights reserved.
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
';

// Send admin email using PHPMailer
try {
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'ask.querytel@gmail.com'; // your gmail
  $mail->Password = 'twsijwpnjdnrnemp';     // app password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;

  $mail->setFrom('ask.querytel@gmail.com', 'MJRS Associates');
  $mail->addAddress('rimi.sandhu05@gmail.com', 'MJRS Admin'); // admin email
  $mail->addReplyTo($email, $name);
  $mail->isHTML(true);
  $mail->Subject = "MJRS Inquiry — {$subject}";
  $mail->Body = $html;

  $mail->send();

  // Send confirmation to user
  $mail->clearAddresses();
  $mail->addAddress($email, $name);
  $mail->Subject = 'We received your message';
  $mail->Body = "
    <p>Hi {$name},</p>
    <p>Thanks for contacting MJRS Associates. We've received your message and will get back to you shortly.</p>
    <p>- MJRS Associates</p>
  ";

  $mail->send();

  echo json_encode(['success' => 'Your inquiry has been sent successfully.']);
} catch (Exception $e) {
  http_response_code(500);
  echo json_encode(['error' => 'Mailer Error: ' . $mail->ErrorInfo]);
}
