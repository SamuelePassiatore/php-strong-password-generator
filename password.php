<?php
session_start();
$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <title>Password</title>
</head>

<body class="container pt-3">
    <p class="fs-3"><strong>Password generata:</strong> <?= $password ?></p>
    <form action="#" method="POST">
        <a href="http://localhost/php-strong-password-generator" class="btn btn-secondary">Torna indietro</a>
    </form>
</body>

</html>