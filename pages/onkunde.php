<?php 

session_start();

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
        <header><a class="links" href="../index.php">Er heerst paniek...</a> <a class="links" href="./pages/onkunde.php">Onkunde</a></header>
        <div class="inhoud">
            <h1>Onkunde</h1>
            <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $validator = true;
                if (empty($_POST["doel"])) {
                  $doelErr = "*";
                  $validator = false;
                }else {
                    $_SESSION["doel"] = $_POST["doel"];
                }
                if (empty($_POST["mens"])) {
                    $mensErr = "*";
                    $validator = false;
                }else {
                  $_SESSION["mens"] = $_POST["mens"];
                    }
                  if (empty($_POST["getal"])) {
                    $getalErr = "*";
                    $validator = false;
                  }else {
                    $_SESSION["getal"] = $_POST["getal"];
                  }
                  if (empty($_POST["item"])) {
                    $itemErr = "*";
                    $validator = false;
                  }else {
                    $_SESSION["item"] = $_POST["item"];
                  }
                  if (empty($_POST["goed"])) {
                    $goedErr = "*";
                    $validator = false;
                  }else {
                    $_SESSION["goed"] = $_POST["goed"];
                    }
                  if (empty($_POST["slecht"])) {
                    $slechtErr = "*";
                    $validator = false;
                  }else {
                    $_SESSION["slecht"] = $_POST["slecht"];
                    }
                  if (empty($_POST["overkomen"])) {
                    $overkomenErr = "*";
                    $validator = false;
                  }else {
                        $_SESSION["overkomen"] = $_POST["overkomen"];
                    }
                if($validator) {
                    header("location: ../code/onkunde.php");
                }
            }
                ?>
            Wat zou je graag willen kunnen? <input type="text" name="doel"><?php echo $doelErr ?><br><br>
            Met welk persoon kun je goed opschieten? <input type="text" name="mens"><?php echo $mensErr ?><br><br>
            Wat is je favoriete getal? <input type="text" name="getal"><?php echo $getalErr ?><br><br>
            Wat heb je altijd als je op vakantie gaat? <input type="text" name="item"><?php echo $itemErr ?><br><br>
            Wat is je beste persoonlijke eigenschap? <input type="text" name="goed"><?php echo $goedErr ?><br><br>
            Wat is je slechtste persoonlijke eigenschap? <input type="text" name="slecht"><?php echo $slechtErr ?><br><br>
            Wat is het ergst dat jou kan overkomen? <input type="text" name="overkomen"><?php echo $overkomenErr ?><br><br>
            <input type="submit"><br><br>
            </form>
        </div>
        <footer>Deze website is gemaakt door © Rick Huisman 2021</footer>
    </div>
</body>
</html>