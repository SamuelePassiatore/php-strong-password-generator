<?php
// Include function
include './includes/functions.php';

// Start session
session_start();

// Retrieving the length set by the user
$user_password_length = $_GET['password-length'] ?? null;
// Password I need to return to the user
$password = '';

// Control if on what should I print on the page
if (!empty($user_password_length)) {
    $password = random_password($user_password_length);
    $_SESSION['password'] = $password;
    header('Location: password.php');
} else {
    $password = 'Nessun parametro valido inserito';
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
        <div class="alert rounded-2 w-50 mx-auto">
            <p class="m-0"><?= $password; ?></p>
        </div>
        <form action="#" method="GET" class="bg-white rounded-2 w-50 mx-auto p-4">
            <div class="mb-3 d-flex align-items-center">
                <label for="password-length" class="form-label pe-5">Lunghezza password:</label>
                <input type="number" id="password-length" name="password-length" min="1" max="20" class="w-25 form-control">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
            <a href="http://localhost/php-strong-password-generator" class="btn btn-secondary">Annulla</a>
        </form>
    </div>
</body>

</html>