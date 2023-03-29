<?php
$ch = curl_init("https://script.google.com/macros/s/AKfycbwqVSaIRXB0Pp-ehmv1QCLCzjL59zI7-bo18BBAklJVQPnHNp63TGB-ltE0W3YpSsad/exec");
curl_setopt($ch, CURLOPT_POST, 1);
echo '<?xml version="1.0" encoding="UTF-8"?><Response><Play>https://docs.google.com/uc?export=play&amp;id=1BJHIONgZAyZcg6AYCRPHAsGervuTm7fZ</Play></Response>';
?>
