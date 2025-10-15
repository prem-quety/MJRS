<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Invalid request method']);
    exit;
}

// sanitize helper
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

// Build email body
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Contact Inquiry</title>
</head>
<body style="margin:0;padding:0;background-color:#f8f9fa;font-family:Arial,Helvetica,sans-serif;">
  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
    <tr>
      <td align="center" style="padding:40px 0;">
        <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="background:#ffffff;border-radius:8px;box-shadow:0 4px 12px rgba(0,0,0,0.1);overflow:hidden;">
          <tr>
            <td style="background:#a60000;color:#ffffff;padding:20px 30px;text-align:center;">
              <h1 style="margin:0;font-size:22px;font-weight:700;">MJRS Associates — Website Inquiry</h1>
            </td>
          </tr>
          <tr>
            <td style="padding:30px;">
              <p style="font-size:16px;color:#333;margin:0 0 10px;">You have received a new inquiry from your website:</p>

              <table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top:20px;">
                <tr>
                  <td style="font-weight:bold;padding:8px 0;width:150px;color:#555;">Full Name:</td>
                  <td style="color:#222;">' . $name . '</td>
                </tr>
                <tr>
                  <td style="font-weight:bold;padding:8px 0;color:#555;">Email:</td>
                  <td style="color:#222;">' . $email . '</td>
                </tr>
                <tr>
                  <td style="font-weight:bold;padding:8px 0;color:#555;">Subject:</td>
                  <td style="color:#222;">' . $subject . '</td>
                </tr>
                <tr>
                  <td style="font-weight:bold;padding:8px 0;color:#555;vertical-align:top;">Message:</td>
                  <td style="color:#222;line-height:1.6;">' . nl2br($message) . '</td>
                </tr>
              </table>

              <p style="margin-top:30px;font-size:14px;color:#888;">This message was sent from the MJRS Associates website contact form.</p>
            </td>
          </tr>
          <tr>
            <td style="background:#f0f0f0;padding:15px 30px;text-align:center;font-size:13px;color:#777;">
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


// Resend configuration
$apiKey = 're_i1nyGiXQ_Hscy7xjAjofGxZWLSgmpxBm6'; // your Resend API key
$fromEmail = 'onboarding@resend.dev';
$toEmail = 'prem.kumar@querytel.com'; // temp recipient

$payload = json_encode([
    'from' => "MJRS Associates <{$fromEmail}>",
    'to' => [$toEmail],
    'subject' => "Website Inquiry — {$subject}",
    'html' => $html,
    'reply_to' => $email
]);

$ch = curl_init('https://api.resend.com/emails');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer {$apiKey}",
        "Content-Type: application/json"
    ],
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload
]);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

if ($error) {
    http_response_code(500);
    echo json_encode(['error' => 'cURL error: ' . $error]);
    exit;
}

if ($httpCode >= 200 && $httpCode < 300) {
    echo json_encode(['success' => 'Your message has been sent successfully.']);
} else {
    http_response_code($httpCode);
    echo json_encode(['error' => 'Resend API error: ' . $response]);
}
