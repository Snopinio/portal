<?php
require_once('class/User.class.php');

if(isset($_REQUEST['email'])&& isset($_REQUEST['password'])) {
    //wysłano formularz - przechwyć i obrób dane
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    //wywołujemy metodę klasy
    //metody statyczne w PHP wywołuje się poprzez ::
    $result = User::Register($email, $password);
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz rejestracji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div id="container">
    <h1 class="text-center mt-5 mb-5">Rejestracja</h1>
        <div id="loginFrom" class="col-4 offset-4 mt-5">
            <form action="rejestracja.php" method="post">
                <label for="emailInput" class="from-label">Adres e-mail:</label>
                <input type="email" class="from-controll mb-3" name="email" id="emailInput">
                <label for="passwordInput" class="from-label">Haslo:</label>
                <input type="password" class="from-controll mb-3" name="password" id="passwordInput">
                <button type="submit" class="btn btn-primary w-100 mt-3">Zajerestruj</button>
            </form>
            <?php
            if (isset($result)) {
                if ($result) {
                    echo "Udało się utworzyć konto";
                } else {
                    echo "Nie udało się utworzyć konta";
                }
            }

            ?>

        </div>
</div>
</body>
</html>