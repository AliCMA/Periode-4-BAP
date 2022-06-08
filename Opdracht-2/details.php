<?php
require 'functions.php';
$connection = dbConnect();

if( !isset($_GET['id']) ){
    echo "De ID is niet gezet";
    exit;
}

$id = $_GET['id'];
$check_int = filter_var($id, FILTER_VALIDATE_INT);
if($check_int == false){
    echo "Dit is geen getal (interger)";
    exit;
}



$statement = $connection->prepare('SELECT * FROM `portfolio` WHERE id=?');
$params = [$id];
$statement->execute($params);
$place =$statement->fetch(PDO::FETCH_ASSOC);
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
    

<div class="container place-details">
        <h1>The best travel spots to visit!</h1>
        <section>
            <article class="place-info">
                <header class="headertype">
                    <h2><?php echo $place['pakket']?></h2>
                    <h3><?php echo $place['inhoud']?></h3>
                </header>
                <figure style="background-image: url(images/<?php echo $place['foto']?>)">
                    <em>€<?php echo $place['prijs']?></em>
                </figure>
                <p>
                <?php echo $place['beschrijving']?>
                </p>
                <hr>
                <a href="index.php">Terug naar het overzicht</a>
            </article>
            <aside class="places-sidebar">
                <h3>Andere bundels</h3>
                <ul>
                    <li>Pakket 1</li>
                    <li>Pakket 2</li>
                    <li>Pakket 3</li>
                    <li>Pakket 4</li>
                </ul>
            </aside>
        </section>
        
    </div>
</body>
</html>
