<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $to = "dungkt@wru.vn";
    $subject = "Send Email from Localhost";
    $txt = "Hello Teacher!";
    $headers = "From: hanoi.aptech2018@gmail.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    mail($to,$subject,$txt,$headers);
    ?>

</body>
</html>