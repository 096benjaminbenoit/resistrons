<!DOCTYPE html>
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
                <p class="main_infoContainer_left__value">10MΩ</p>
            </div>
            <div class="main_infoContainer_right">
                <h2 class="main_infoContainer_right__title">Tolérance :</h2>
                <p class="main_infoContainer_right__value">10%</p>
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
                <form action="" method="GET">
                    <select class="main_choiseContainer_color1" name="color1" id="color1-select">
                        <option value="">Sélectionnez une couleur</option>
                        <option value="<?php $black[0] ?>">NOIR</option>
                        <option value="<?php $brown[0] ?>">BRUN</option>
                        <option value="<?php $red[0] ?>">ROUGE</option>
                        <option value="<?php $orange[0] ?>">ORANGE</option>
                        <option value="<?php $yellow[0] ?>">JAUNE</option>
                        <option value="<?php $green[0] ?>">VERT</option>
                        <option value="<?php $blue[0] ?>">BLEU</option>
                        <option value="<?php $violet[0] ?>">VIOLET</option>
                        <option value="<?php $grey[0] ?>">GRIS</option>
                        <option value="<?php $white[0] ?>">BLANC</option>
                    </select>
                    <select class="main_choiseContainer_color2" name="color2" id="color2-select">
                        <option value="">Sélectionnez une couleur</option>
                        <option value="<?php $black[1] ?>">NOIR</option>
                        <option value="<?php $brown[1] ?>">BRUN</option>
                        <option value="<?php $red[1] ?>">ROUGE</option>
                        <option value="<?php $orange[1] ?>">ORANGE</option>
                        <option value="<?php $yellow[1] ?>">JAUNE</option>
                        <option value="<?php $green[1] ?>">VERT</option>
                        <option value="<?php $blue[1] ?>">BLEU</option>
                        <option value="<?php $violet[1] ?>">VIOLET</option>
                        <option value="<?php $grey[1] ?>">GRIS</option>
                        <option value="<?php $white[1] ?>">BLANC</option>
                    </select>
                    <select class="main_choiseContainer_color3" name="color3" id="color3-select">
                        <option value="">Sélectionnez une couleur</option>
                        <option value="<?php $black[2] ?>">NOIR</option>
                        <option value="<?php $brown[2] ?>">BRUN</option>
                        <option value="<?php $red[2] ?>">ROUGE</option>
                        <option value="<?php $orange[2] ?>">ORANGE</option>
                        <option value="<?php $yellow[2] ?>">JAUNE</option>
                        <option value="<?php $green[2] ?>">VERT</option>
                        <option value="<?php $blue[2] ?>">BLEU</option>
                        <option value="<?php $violet[2] ?>">VIOLET</option>
                        <option value="<?php $grey[2] ?>">GRIS</option>
                        <option value="<?php $white[2] ?>">BLANC</option>
                        <option value="<?php $gold[2] ?>">OR</option>
                        <option value="<?php $silver[2] ?>">ARGENT</option>
                    </select>
                    <select class="main_choiseContainer_color4" name="color4" id="color4-select">
                        <option value="">Sélectionnez une couleur</option>
                        <option value="<?php $brown[3] ?>">BRUN</option>
                        <option value="<?php $red[3] ?>">ROUGE</option>
                        <option value="<?php $green[3] ?>">VERT</option>
                        <option value="<?php $blue[3] ?>">BLEU</option>
                        <option value="<?php $violet[3] ?>">VIOLET</option>
                        <option value="<?php $grey[3] ?>">GRIS</option>
                        <option value="<?php $gold[3] ?>">OR</option>
                        <option value="<?php $silver[3] ?>">ARGENT</option>
                    </select>
                    <button type="submit">CALCULER</button>
                </form>
        </section>
        <section class="main_valueContainer">
            <h2 class="main_valueContainer__title">Valeur de la résistance :</h2>
            <p class="main_valueContainer__value">4,7kΩ 5%</p>
        </section>
    </main>
</body>
</html>


<?php
    $black = array("anneau1"=>0, "anneau2"=>0, "anneau3"=>1);
    $brown = array("anneau1"=>1, "anneau2"=>1, "anneau3"=>10, "anneau4"=>1);
    $red = array("anneau1"=>2, "anneau2"=>2, "anneau3"=>100, "anneau4"=>2);
    $orange = array("anneau1"=>3, "anneau2"=>3, "anneau3"=>1000);
    $yellow = array("anneau1"=>4, "anneau2"=>4, "anneau3"=>10000);
    $green = array("anneau1"=>5, "anneau2"=>5, "anneau3"=>100000, "anneau4"=>0,5);
    $blue = array("anneau1"=>6, "anneau2"=>6, "anneau3"=>1000000, "anneau4"=>0,25);
    $violet = array("anneau1"=>7, "anneau2"=>7, "anneau3"=>10000000, "anneau4"=>0,10);
    $grey = array("anneau1"=>8, "anneau2"=>8, "anneau3"=>100000000, "anneau4"=>0,05);
    $white = array("anneau1"=>9, "anneau2"=>9, "anneau3"=>1000000000);
    $gold = array("anneau3"=>0,1, "anneau4"=>5);
    $silver = array("anneau3"=>0,01, "anneau4"=>10);   
?>