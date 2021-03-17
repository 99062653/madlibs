<?php

session_start();

$inputs = array(
    $doel = $_SESSION["doel"],
    $persoon = $_SESSION["mens"],
    $getal = $_SESSION["getal"],
    $item = $_SESSION["item"],
    $goed = $_SESSION["goed"],
    $slecht = $_SESSION["slecht"],
    $overkomen = $_SESSION["overkomen"]
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Madlibs Onkunde</title>
</head>
<body>
    <div class="pagina">
        <img src="../img/logo.png" alt="logo">
        <header><a class="links" href="../index.php">Er heerst paniek...</a> <a class="links" href="../pages/onkunde.php">Onkunde</a></header>
        <div class="inhoud">
            <h1>Onkunde</h1>
                    <p class="tekst">Er zijn veel mensen die niet kunnen <?php echo $doel ?>. Neem nou <?php echo $persoon ?>. Zelfs met de hulp van een <?php echo $item ?> of zelfs <?php echo $getal ?> kan 
                    <?php echo $persoon ?> niet <?php echo $doel ?>. Dat heeft niet te maken met een gebrek aan <?php echo $goed ?>, maar met een te veel aan <?php echo $slecht ?>. Te veel 
                    <?php echo $slecht ?> leidt tot een <?php $overkomen ?> en dat is niet goed als je wilt <?php echo $doel ?>. Helaas voor <?php echo $persoon ?> </p>
        </div>
        <footer>Deze website is gemaakt door © Rick Huisman 2021</footer>
    </div>
</body>
</html>