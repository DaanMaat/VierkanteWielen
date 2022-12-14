<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn profiel</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <?php include('navbar.php')?>

    <div class="welcome">
        <h1>Welkom bij je account, </h1>
    </div>

    <!---Account Details--->
    <div class="roundRect" style="background-color:#E6E6E6">
        <h2 class="rectTitle">Jouw account</h2>
        <section class="section">
            <div>
                <p>(username)</p>
            </div>
        </section>
        <section class="section">
            <div>
                <p>(email)</p>
            </div>
            <div>
                <p>(telefoon)</p>
            </div>
        </section>
        <section class="section">
            <button type="button" class="buttonBlue">
                <a style="color:white;" href="#">Edit</a>
            </button>
        </section>
    </div>

    <div class="anderen_flex">
        <!---Lijst met leerlingen--->
        <div class="anderen leerlingen">
            <h2 class="rectTitle">Leerlingen</h2>

            <div>
                <p>(Naam leerling)</p>
            </div>

            <button type="button" class="buttonBlue">
                <a style="color:white;" href="#">Meer Leerlingen</a>
            </button>
        </div>

        <!---Lijst met medewerkers--->
        <div class="anderen medewerkers">
            <h2 class="rectTitle">Medewerkers</h2>

            <div>
                <p>(Naam medewerker)</p>
            </div>

            <button type="button" class="buttonBlue">
                <a style="color:white;" href="#">Meer medewerkers</a>
            </button>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>

</html>