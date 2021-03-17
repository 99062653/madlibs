<?php 

session_start();

$inputs = array(
    $dier = $_SESSION["huisdier"],
    $naam = $_SESSION["persoon"],
    $land = $_SESSION["land"],
    $activiteit = $_SESSION["activiteit"],
    $speelgoed = $_SESSION["speelgoed"],
    $docent = $_SESSION["docent"],
    $geld = $_SESSION["geld"],
    $bezigheid = $_SESSION["bezigheid"]
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Madlibs Paniek</title>
</head>
<body>
    <div class="pagina">
        <img src="../img/logo.png" alt="logo">
        <header><a class="links" href="../index.php">Er heerst paniek...</a> <a class="links" href="../pages/onkunde.php">Onkunde</a></header>
        <div class="inhoud">
            <h1>Er heerst paniek...</h1>
                    <p>Er heerst paniek in het koningrijk <?php echo $land ?>, Koning <?php echo $docent ?> is ten einde raad en als koning <?php echo $docent ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $naam ?>.</p>
                    <p>"<?php echo $naam ?>! Het is een ramp! Het is een schande!"</p>
                    <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
                    <p>"Mijn <?php echo $dier ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $speelgoed ?> voor hem gekocht!"</p>
                    <p>"Majesteit, uw <?php echo $dier ?> komt vanzelf weer terug?"</p>
                    <p>"Ja da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $bezigheid ?> leren?"</p>
                    <p>"Maar Sire, daar kunt u toch uw <?php echo $geld ?> voor gebruiken"</p>
                    <p>"<?php echo $naam ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had?</p>
                    <p class="laatste">"<?php echo $activiteit ?> Sire"</p>
        </div>
        <footer>Deze website is gemaakt door © Rick Huisman 2021</footer>
    </div>
</body>
</html>