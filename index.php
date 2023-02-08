<?php

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
        <form action="#" method="POST" class="bg-white rounded-2 w-50 mx-auto p-4">
            <div class="mb-3">
                <label for="password-length" class="pe-5">Lunghezza password:</label>
                <input type="number" id="password-length" name="password-length" min="1" max="20" class="w-25">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>
        </form>

    </div>
</body>

</html>