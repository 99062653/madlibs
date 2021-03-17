<?php
$inputs = array(
    $doel = $_POST["doel"],
    $persoon = $_POST["mens"],
    $getal = $_POST["getal"],
    $item = $_POST["item"],
    $goed = $_POST["goed"],
    $slecht = $_POST["slecht"],
    $overkomen = $_POST["overkomen"]
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
        <header><a class="links" href="../index.html">Er heerst paniek...</a> <a class="links" href="../pages/onkunde.html">Onkunde</a></header>
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