<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Madlibs Paniek</title>
</head>
<body>
    <div class="pagina">
        <img src="img/logo.png" alt="logo">
        <header><a class="links" href="index.php">Er heerst paniek...</a> <a class="links" href="pages/onkunde.php">Onkunde</a></header>
        <div class="inhoud">
            <h1>Er heerst paniek</h1>
            <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $validator = true;
                if (empty($_POST["huisdier"])) {
                  $huisdierErr = "*";
                  $validator = false;
                }else {
                    $huisdier = $_POST["huisdier"];
                }
                if (empty($_POST["persoon"])) {
                    $persoonErr = "*";
                    $validator = false;
                }else {
                        $persoon = $_POST["persoon"];
                    }
                  if (empty($_POST["land"])) {
                    $landErr = "*";
                    $validator = false;
                  }else {
                        $land = $_POST["land"];
                  }
                  if (empty($_POST["activiteit"])) {
                    $activiteitErr = "*";
                    $validator = false;
                  }else {
                        $activiteit = $_POST["activiteit"];
                  }
                  if (empty($_POST["speelgoed"])) {
                    $speelgoedErr = "*";
                    $validator = false;
                  }else {
                        $speelgoed = $_POST["speelgoed"];
                    }
                  if (empty($_POST["docent"])) {
                    $docentErr = "*";
                    $validator = false;
                  }else {
                        $docent = $_POST["docent"];
                    }
                  if (empty($_POST["geld"])) {
                    $geldErr = "*";
                    $validator = false;
                  }else {
                        $geld = $_POST["geld"];
                    }
                  if (empty($_POST["bezigheid"])) {
                    $bezigheidErr = "*";
                    $validator = false;
                  }else {
                        $bezigheid = $_POST["bezigheid"];
                    }
                if($validator) {
                    header("location: code/paniek.php");
                }
            }
                ?>
            Welk dier zou je nooit als huisdier willen hebben? <input type="text" value="<?php echo $huisdier ?>" name="huisdier"><?php echo $huisdierErr ?><br><br>
            Wie is de belangrijkste persoon in je leven? <input type="text" value="<?php echo $persoon ?>" name="persoon"><?php echo $persoonErr ?><br><br>
            In welk land zou je graag willen wonen? <input type="text" value="<?php echo $land ?>" name="land"><?php echo $landErr ?><br><br>
            Wat doe je als je je verveelt? <input type="text" value="<?php echo $activiteit ?>" name="activiteit"><?php echo $activiteitErr ?><br><br>
            Met welk speelgoed speelde je als kind het meest? <input type="text" value="<?php echo $speelgoed ?>" name="speelgoed"><?php echo $speelgoedErr ?><br><br>
            Bij welke docent spijbel je het liefst? <input type="text" value="<?php echo $docent ?>" name="docent"><?php echo $docentErr ?><br><br>
            Als je 10 duizend euro had, wat zou je dan kopen? <input type="text" value="<?php echo $geld ?>" name="geld"><?php echo $geldErr ?><br><br>
            Wat is je favoriete bezigheid? <input type="text" value="<?php echo $bezigheid ?>" name="bezigheid"><?php echo $bezigheidErr ?><br><br>
            <input type="submit"><br>
            </form>
        </div>
        <footer>Deze website is gemaakt door © Rick Huisman 2021</footer>
    </div>
</body>
</html>