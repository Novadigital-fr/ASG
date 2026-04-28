<?php
header('Content-Type: text/html; charset=utf-8');

echo '<h1>Diagnostic mail cPanel</h1>';
echo '<p><strong>PHP version:</strong> ' . phpversion() . '</p>';
echo '<p><strong>mail() exists:</strong> ' . (function_exists('mail') ? 'yes' : 'no') . '</p>';

$disabled = ini_get('disable_functions');
echo '<p><strong>disable_functions:</strong> ' . ($disabled !== '' ? htmlspecialchars($disabled) : '(empty)') . '</p>';
echo '<p><strong>mail in disable_functions:</strong> ' . (stripos((string)$disabled, 'mail') !== false ? 'YES (blocked)' : 'no') . '</p>';

echo '<p><strong>sendmail_path:</strong> ' . ini_get('sendmail_path') . '</p>';
echo '<p><strong>SMTP:</strong> ' . ini_get('SMTP') . '</p>';
echo '<p><strong>smtp_port:</strong> ' . ini_get('smtp_port') . '</p>';

if (function_exists('mail')) {
    $to = 'novadigital.contact@gmail.com';
    $subject = 'Test cPanel mail() — ' . date('Y-m-d H:i:s');
    $body = 'Test envoyé depuis ' . ($_SERVER['HTTP_HOST'] ?? 'unknown') . ' à ' . date('c');
    $headers = 'From: noreply@alexander-strategy.com' . "\r\n" .
               'Content-Type: text/plain; charset=UTF-8';

    $result = mail($to, $subject, $body, $headers);
    echo '<p><strong>mail() returned:</strong> ' . var_export($result, true) . '</p>';

    $err = error_get_last();
    if ($err) {
        echo '<pre>' . htmlspecialchars(print_r($err, true)) . '</pre>';
    }
}
