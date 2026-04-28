<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$raw = file_get_contents('php://input');
$data = json_decode($raw, true);

if (!is_array($data)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid payload']);
    exit;
}

$name    = trim((string)($data['name']    ?? ''));
$email   = trim((string)($data['email']   ?? ''));
$subject = trim((string)($data['subject'] ?? ''));
$message = trim((string)($data['message'] ?? ''));

if ($name === '' || $email === '' || $subject === '' || $message === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Missing fields']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid email']);
    exit;
}

foreach ([$name, $email, $subject] as $value) {
    if (preg_match('/[\r\n]/', $value)) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid input']);
        exit;
    }
}

$to            = 'novadigital.contact@gmail.com';
$mailSubject   = '[Site ASG] ' . $subject;
$encodedSubject = '=?UTF-8?B?' . base64_encode($mailSubject) . '?=';

$nameHtml    = htmlspecialchars($name,    ENT_QUOTES, 'UTF-8');
$emailHtml   = htmlspecialchars($email,   ENT_QUOTES, 'UTF-8');
$subjectHtml = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$messageHtml = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

$body = '<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"></head>
<body style="font-family:Arial,Helvetica,sans-serif;color:#202A35;background:#f5f5f5;margin:0;padding:24px;">
  <table cellpadding="0" cellspacing="0" style="max-width:600px;margin:0 auto;background:#ffffff;border-radius:8px;overflow:hidden;border:1px solid #e5e5e5;">
    <tr>
      <td style="padding:20px 32px;border-bottom:1px solid #eee;">
        <h2 style="margin:0;font-size:16px;color:#202A35;font-weight:600;">Nouveau message &mdash; Site ASG</h2>
      </td>
    </tr>
    <tr>
      <td style="padding:24px 32px;">
        <p style="margin:0 0 4px 0;color:#888;font-size:11px;text-transform:uppercase;letter-spacing:1px;">De</p>
        <p style="margin:0 0 18px 0;font-size:15px;">' . $nameHtml . ' &lt;' . $emailHtml . '&gt;</p>

        <p style="margin:0 0 4px 0;color:#888;font-size:11px;text-transform:uppercase;letter-spacing:1px;">Sujet</p>
        <p style="margin:0 0 18px 0;font-size:15px;">' . $subjectHtml . '</p>

        <p style="margin:0 0 4px 0;color:#888;font-size:11px;text-transform:uppercase;letter-spacing:1px;">Message</p>
        <p style="margin:0;font-size:15px;line-height:1.6;">' . $messageHtml . '</p>
      </td>
    </tr>
  </table>
</body>
</html>';

$fromAddress = 'noreply@alexander-strategy.com';
$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/html; charset=UTF-8',
    'From: Site ASG <' . $fromAddress . '>',
    'Reply-To: ' . $name . ' <' . $email . '>',
    'X-Mailer: PHP/' . phpversion(),
];

$ok = mail($to, $encodedSubject, $body, implode("\r\n", $headers), '-f' . $fromAddress);

if (!$ok) {
    http_response_code(500);
    echo json_encode(['error' => 'Mail send failed']);
    exit;
}

echo json_encode(['ok' => true]);
