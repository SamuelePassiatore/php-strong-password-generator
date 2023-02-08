<?php
$user_password_length = $_GET['password-length'] ?? null;

// Array of characters
$lower_chars = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
$upper_chars = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
$numbers = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
$symbols = array("!", "?", "#", "$", "%", "&", "*", "-", "_");

// Array merging
$all_chars = array_merge($lower_chars, $upper_chars, $numbers, $symbols);

// Generating random password
$password = '';
for ($i = 0; $i < $user_password_length; $i++) {
    $random_chars = $all_chars[array_rand($all_chars)];
    $password .= $random_chars;
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <title>PHP Strong Password Generator</title>
    <style>
        .blue-bg-custom {
            background-color: #001632;
        }

        .light-blue-custom {
            color: #808A98;
        }
    </style>
</head>

<body class="blue-bg-custom">
    <div class="container pt-5">
        <div class="titles text-center pb-2">
            <h1 class="light-blue-custom">Strong Password Generator</h1>
            <h2 class="text-white">Genera una password sicura</h2>
        </div>
        <div class="alert bg-white rounded-2 w-50 mx-auto py-4">

        </div>
        <form action="#" method="GET" class="bg-white rounded-2 w-50 mx-auto p-4">
            <div class="mb-3 d-flex align-items-center">
                <label for="password-length" class="form-label pe-5">Lunghezza password:</label>
                <input type="number" id="password-length" name="password-length" min="1" max="20" class="w-25 form-control">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>
        </form>

    </div>
</body>

</html>