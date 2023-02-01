<?php

// LES DONNÉES
$ring1 = array("black"=>0,"brown"=>1,"red"=>2,"orange"=>3,"yellow"=>4,"green"=>5,"blue"=>6,"violet"=>7,"grey"=>8,"white"=>9);
$ring2 = array("black"=>0,"brown"=>2,"red"=>2,"orange"=>3,"yellow"=>4,"green"=>5,"blue"=>6,"violet"=>7,"grey"=>8,"white"=>9);
$ring3 = array("black"=>1,"brown"=>10,"red"=>100,"orange"=>1000,"yellow"=>10000,"green"=>100000,"blue"=>1000000,"violet"=>10000000,"grey"=>100000000,"white"=>1000000000,"gold"=>0.1,"silver"=>0.01);
$ring4 = array("brown"=>1,"red"=>2,"green"=>0.5,"blue"=>0.25,"violet"=>0.10,"grey"=>0.05,"gold"=>5,"silver"=>10);

// RECUPÉRER LE  FORM
if(isset($_GET["color1"])){
    $first = $_GET["color1"];
} else {
    $first = 0;
}

$first = $_GET["color1"] ?? 0;
$second = $_GET["color2"] ?? 0;
$third = $_GET["color3"] ?? 0;
$fourth = $_GET["color4"] ?? 0;

// CALCULER LES VALEURS
function ConvertDigits($value){
    if ($value <= 999) {
        echo ($value);
    } else if ($value <= 999999) {
        echo ($value / 1000)."K";
    } else if ($value <= 999999999) {
        echo ($value / 1000000)."M";
    }else if ($value <= 999999999999) {
        echo ($value / 100000000000)."G";
    } else {
        echo ($value / 100000000000)."G";
    }
};

function calc($first,$second,$third,$fourth){
    $result=0;
    $result = ($first.$second)*$third;
    echo(ConvertDigits($result)."-Ω ".$fourth."-%");
};


?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>RESISTRONS</title>
</head>
<body>
    <main class="main">
        <h1 class="main__title">RESISTRONS</h1>
        <section class="main_infoContainer">
            <div class="main_infoContainer_left">
                <h2 class="main_infoContainer_left__title">Résistance :</h2>
                <p class="main_infoContainer_left__value"><?= ConvertDigits($third) ?>Ω</p>
            </div>
            <div class="main_infoContainer_right">
                <h2 class="main_infoContainer_right__title">Tolérance :</h2>
                <p class="main_infoContainer_right__value"><?= $fourth?>%</p>
            </div>
        </section>
        <section class="main_resistanceContainer">
            <div class="main_resistanceContainer__leftBranch"></div>
            <div class="main_resistanceContainer_core">
                <div class="main_resistanceContainer_core__color1"></div>
                <div class="main_resistanceContainer_core__color2"></div>
                <div class="main_resistanceContainer_core__color3"></div>
                <div class="main_resistanceContainer_core__color4"></div>            
            </div>
            <div class="main_resistanceContainer__rightBranch"></div>
        </section>
            <section class="main_choiseContainer">
                <form action="index.php" method="GET">
                    <select class="main_choiseContainer_color1" name="color1" id="color1-select">
                        <option label="BLACK" value="<?php echo $ring1["black"] ?>" ></option>
                        <option label="BROWN" value="<?php echo $ring1["brown"] ?>"></option>
                        <option label="RED" value="<?php echo $ring1["red"] ?>"></option>
                        <option label="ORANGE" value="<?php echo $ring1["orange"] ?>"></option>
                        <option label="YELLOW" value="<?php echo $ring1["yellow"] ?>"></option>
                        <option label="GREEN" value="<?php echo $ring1["green"] ?>"></option>
                        <option label="BLUE" value="<?php echo $ring1["blue"] ?>"></option>
                        <option label="VIOLET" value="<?php echo $ring1["violet"] ?>"></option>
                        <option label="GREY" value="<?php echo $ring1["grey"] ?>"></option>
                        <option label="WHITE" value="<?php echo $ring1["white"] ?>"></option>
                    </select>
                    <select class="main_choiseContainer_color2" name="color2" id="color2-select">
                        <option value="<?php echo $ring2["black"] ?>">NOIR</option>
                        <option value="<?php echo $ring2["brown"] ?>">BRUN</option>
                        <option value="<?php echo $ring2["red"] ?>">ROUGE</option>
                        <option value="<?php echo $ring2["orange"] ?>">ORANGE</option>
                        <option value="<?php echo $ring2["yellow"] ?>">JAUNE</option>
                        <option value="<?php echo $ring2["green"] ?>">VERT</option>
                        <option value="<?php echo $ring2["blue"] ?>">BLEU</option>
                        <option value="<?php echo $ring2["violet"] ?>">VIOLET</option>
                        <option value="<?php echo $ring2["grey"] ?>">GRIS</option>
                        <option value="<?php echo $ring2["white"] ?>">BLANC</option>
                    </select>
                    <select class="main_choiseContainer_color3" name="color3" id="color3-select">
                        <option value="<?php echo $ring3["black"] ?>">NOIR</option>
                        <option value="<?php echo $ring3["brown"] ?>">BRUN</option>
                        <option value="<?php echo $ring3["red"] ?>">ROUGE</option>
                        <option value="<?php echo $ring3["orange"] ?>">ORANGE</option>
                        <option value="<?php echo $ring3["yellow"] ?>">JAUNE</option>
                        <option value="<?php echo $ring3["green"] ?>">VERT</option>
                        <option value="<?php echo $ring3["blue"] ?>">BLEU</option>
                        <option value="<?php echo $ring3["violet"] ?>">VIOLET</option>
                        <option value="<?php echo $ring3["grey"] ?>">GRIS</option>
                        <option value="<?php echo $ring3["white"] ?>">BLANC</option>
                        <option value="<?php echo $ring3["gold"] ?>">OR</option>
                        <option value="<?php echo $ring3["silver"] ?>">ARGENT</option>
                    </select>
                    <select class="main_choiseContainer_color4" name="color4" id="color4-select">
                        <option value="<?php echo $ring4["brown"] ?>">BRUN</option>
                        <option value="<?php echo $ring4["red"] ?>">ROUGE</option>
                        <option value="<?php echo $ring4["green"] ?>">VERT</option>
                        <option value="<?php echo $ring4["blue"] ?>">BLEU</option>
                        <option value="<?php echo $ring4["violet"] ?>">VIOLET</option>
                        <option value="<?php echo $ring4["grey"] ?>">GRIS</option>
                        <option value="<?php echo $ring4["gold"] ?>">OR</option>
                        <option value="<?php echo $ring4["silver"] ?>">ARGENT</option>
                    </select>
                    <button type="submit">CALCULER</button>
                </form>
        </section>
        <section class="main_valueContainer">
            <h2 class="main_valueContainer__title">Valeur de la résistance :</h2>
            <p class="main_valueContainer__value"><?= calc($first, $second, $third, $fourth)?></p>
        </section>
    </main>
    <script src="app.js"></script>
</body>
</html>

<?php