<?php
require_once('class/User.class.php');
require_once('class/Profile.class.php');
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link rel="stylesheet" href="styllogowania.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

<a href="login.php">
<button class="btn btn-primary">Logowanie</button>
</a>
<a href="rejestracja.php">
<button class="btn btn-primary">Rejestracja</button>
</a>
<a href="profile.php">
<button class="btn btn-primary">Profil</button>
</a>
<br>
<?php
$profiles = profile::GetAll();
foreach ($profiles as $profile){
    echo '<img src="'.$profile->getProfilePhotoURL().'" style="height: 200px">';
    echo $profile->getFullName();
    echo "<br>";
}
?>
</body>
</html>