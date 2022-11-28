<?php
session_start();
require_once('functions.php');

$_SESSION['false-user-pass'] = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepagina</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="Navi">
        <a href="index.php">Home</a>
        <a href="news.html">News</a>
        <a href="contact.html">Contact</a>
        <a href="inloggen.php">Log in</a>
    </div>
    <div class="imgcon">
        <img class="imgclass" src="Images/download.png">
        <div class="signup"><a href="registreren.php">Begin met het rijden!</a></div>
    </div>
    <div class="info">
        <div class='info-text'>
            <h1>Rijschool vierkante wielen helpt u op weg!</h1>
            <p>Rijschool Vierkante Wielen bestaat al 19 jaar. Wij geven les in een ontspannen en vakkundige manier. Zo hebben wij al meer dan 300 leerlingen geholpen met het behalen van hun rijbewijs. Waar wacht u nog op?</p>
        </div>
        <img class="imgclass2" src="images/geslaagd.jpg" alt="Foto van geslaagde rijles student.">
    </div>
    <div class="reviews">
        <img class="review-img" src="Images/persoon1.png" alt="">
        <div>
            <p>Dankzij de leuke en goede leerzame rijlessen in een keer geslaagd voor mijn praktijkexamen. Ook heb ik veel gehad aan de opnames die werden gemaakt tijdens de rijles.</p>
        </div>
    </div>
    <div class="reviews2">
        <div>
            <p>Super rijschool in Almere. Goeie instructeur die mij gelijk op mn gemak stelde en het gevoel gaf dat ik het kon. Dankzij jullie dat ook in 1 x geslaagd !!</p>
        </div>
        <img class="review-img" src="Images/persoon2.png" alt="">
    </div>
    <div class="reviews">
        <img class="review-img" src="Images/persoon3.png" alt="">
        <div>
            <p>Super! Goede en duidelijke uitleg, flexibel in afspraken maken en Sebastiaan maakt rijlessen nemen zelfs leuk en gezellig. Ik ga het zeker missen. Bedankt voor alles!</p>
        </div>
    </div>
    <div class="reviews2">
        <div>
            <p>"Je krijgt de ruimte om je eigen rijlessen in te plannen. Als je bijna gaat afrijden heb jij een streepje voor in de planning, en als je voor de zekerheid een extra lesje wilt dan is dat zo geregeld. Om het al een top rijschool, en buiten dat de auto heerlijk rijdt ga ik ook de gezelligheid missen van Sebastiaan!"</p>
        </div>
        <img class="review-img" src="Images/persoon4.png" alt="">
    </div>
</body>
</html> 