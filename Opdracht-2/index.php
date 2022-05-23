<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `portfolio`');


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
    <h1>Website bundels</h1>
    <section class="places-list">

    <?php foreach($result as $row): ?>
    <article class="places-list__place">
        <h2><?php echo $row ['watvoordevikben'];  ?></h2>
        <figure class="places-list__photo" style="background-image: url(images/<?php echo $row ['foto']; ?>)"></figure>
        <header>
            <h3>Prijs:</h3>
            <em>25 EU</em>
        </header>

        <p>Je krijgt alle files meegestuurd als je de bundel aanschaft!</p>

    </article>
    <?php endforeach; ?>

    </section>
    </div>

</body>
</html>