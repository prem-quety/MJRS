<?php
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

// Configuration
$apiKey = 're_i1nyGiXQ_Hscy7xjAjofGxZWLSgmpxBm6'; // replace with your actual Resend API key
$fromEmail = 'onboarding@resend.dev'; // Resend’s default test sender
$toEmail = 'prem.kumar@querytel.com'; // your current destination email

$subject = 'New Incorporation Request — ' . ($data['first_name'] ?? 'Unknown');

// Build email content
$html = "<h2>New Incorporation Request</h2><table cellpadding='6' cellspacing='0' border='1' style='border-collapse:collapse;'>";
foreach ($data as $key => $val) {
    $html .= "<tr><td><strong>" . ucfirst(str_replace('_', ' ', $key)) . "</strong></td><td>$val</td></tr>";
}
$html .= "</table>";

// Payload
$payload = json_encode([
    "from" => "MJRS Associates <{$fromEmail}>",
    "to" => [$toEmail],
    "subject" => $subject,
    "html" => $html,
    "reply_to" => $data['primary_email'] ?? null
]);

// Send via Resend
$ch = curl_init('https://api.resend.com/emails');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer {$apiKey}",
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
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
    echo json_encode(['success' => 'Email sent successfully.']);
} else {
    http_response_code($httpCode);
    echo json_encode(['error' => 'Resend error: ' . $response]);
}
