<?php
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

// Accept only POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Invalid request method']);
    exit;
}

// Check data
if (empty($_POST['OpenIncorporationRequests'])) {
    http_response_code(400);
    echo json_encode(['error' => 'No form data received']);
    exit;
}

$data = $_POST['OpenIncorporationRequests'];

// Sanitize
function clean($v)
{
    return htmlspecialchars(trim($v), ENT_QUOTES, 'UTF-8');
}
foreach ($data as $k => $v) {
    $data[$k] = clean($v);
}

// Build email subject and HTML
$toEmail = 'rimi.sandhu05@gmail.com'; // admin recipient
$subject = 'New Incorporation Request — ' . ($data['first_name'] ?? 'Unknown');

$html = "<h2>New Incorporation Request</h2><table cellpadding='6' cellspacing='0' border='1' style='border-collapse:collapse;'>";
foreach ($data as $key => $val) {
    $html .= "<tr><td><strong>" . ucfirst(str_replace('_', ' ', $key)) . "</strong></td><td>$val</td></tr>";
}
$html .= "</table>";

// Send using PHPMailer (SMTP)
try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ask.querytel@gmail.com'; // SMTP username
    $mail->Password = 'twsijwpnjdnrnemp'; // SMTP app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('ask.querytel@gmail.com', 'MJRS Associates');
    $mail->addAddress($toEmail, 'MJRS Admin');
    if (!empty($data['primary_email'])) {
        $mail->addReplyTo($data['primary_email'], ($data['first_name'] ?? 'Applicant'));
    }
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $html;

    $mail->send();

    // Send confirmation to applicant if email provided
    if (!empty($data['primary_email'])) {
        $mail->clearAddresses();
        $mail->addAddress($data['primary_email'], ($data['first_name'] ?? 'Applicant'));
        $mail->Subject = 'We received your incorporation request';
        $mail->Body = "<p>Hi " . ($data['first_name'] ?? '') . ",</p><p>Thanks for your incorporation request. We have received your details and will contact you shortly.</p><p>— MJRS Associates</p>";
        $mail->send();
    }

    echo json_encode(['success' => 'Email sent successfully.']);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Mailer Error: ' . $mail->ErrorInfo]);
}
