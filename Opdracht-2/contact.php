<?php
require 'functions.php';
$connection = dbConnect();

// Gegegevens check
if($_SERVER['REQUEST_METHOD'] == "POST"){
    print_r($_POST);
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website prices</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<div class="container">
        <h1 class="h1-titel">Website pakket!</h1>
    <br>
     <section class="contact">
     <header class="titel2">
        <h2 class="h2-titel">Bestel pakket </h2>
     </header>

     <br>
    <form action="contact.php" method="POST">
        <div class="form__field">
            <label class="labelnaam" for="voornaam">Voornaam</label>&nbsp;
            <input type="text" id="voornaam" name="voornaam" placeholder="Vul uw voornaam in" required />
        </div>
        <br>
        <div class="form__field">
            <label class="labelnaam" for="achternaam">Achternaam</label>&nbsp;
            <input type="text" id="achternaam" name="achternaam" placeholder="Vul uw achternaam in" required />
        </div>
        <br>
        <div class="form__field">
            <label class="labelnaam" for="Soort-pakket">Soort pakket</label>&nbsp;
            <input type="text" id="Soort-pakket" name="Soort-pakket" placeholder="Vul uw soort pakket in die u wilt gaan aanschaffen" required />
        </div>
        <br>
        <div class="form__field">
            <label class="labelnaam" for="contactgegevens">Contactgegevens</label>&nbsp;
            <textarea type="text" id="contactgegevens" name="contactgegevens" placeholder="Vul uw contactgegevens in" required></textarea>
        </div>
        <button class="opsturenButton" type="submit" class="form_button">Opsturen</button>
    </form>

     </section>


    </div>
</body>
</html>



