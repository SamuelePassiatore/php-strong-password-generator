<?php
// Include function
include './includes/functions.php';

// Start session
session_start();

// Retrieving the length set by the user
$user_password_length = $_GET['password-length'] ?? null;
// Password I need to return to the user
$password = '';
//Alert class
$alert_class = '';

// Control if on what should I print on the page
if (!empty($user_password_length) && is_numeric($user_password_length)) {
    if ($user_password_length >= 1 && $user_password_length <= 20) {
        $password = randomPassword($user_password_length);
        $_SESSION['password'] = $password;
        header('Location: password.php');
    } else {
        $password = 'Inserisci un numero compreso tra 1 e 20';
        $alert_class = 'bg-danger';
    }
} else {
    $password = 'Nessun parametro valido inserito';
    $alert_class = 'bg-danger';
}

?>

<!DOCTYPE html>
<html lang="it">

<?php
//Include head html
include './includes/head.php'
?>

<body class="blue-bg-custom">
    <div class="container pt-5">
        <div class="titles text-center pb-2">
            <h1 class="light-blue-custom">Strong Password Generator</h1>
            <h2 class="text-white">Genera una password sicura</h2>
        </div>
        <div class="alert rounded-2 w-50 mx-auto <?= $alert_class; ?>">
            <p class="m-0"><?= $password; ?></p>
        </div>
        <form action="#" method="GET" class="bg-white rounded-2 w-50 mx-auto p-4">
            <div class="mb-3 d-flex align-items-center">
                <label for="password-length" class="form-label pe-5">Lunghezza password:</label>
                <input type="number" id="password-length" name="password-length" class="w-25 form-control border border-secondary">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <a href="http://localhost/php-strong-password-generator" class="btn btn-secondary">Annulla</a>
        </form>
    </div>
</body>

</html>