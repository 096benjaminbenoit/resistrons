

<?php
// <!-- first ring -->
$black1 = 0;
$brown1 = 1;
$red1 = 2;
$orange1 = 3;
$yellow1 = 4;
$green1 = 5;
$blue1 = 6;
$violet1 = 7;
$grey1 = 8;
$white1 = 9;
// <!-- second ring -->
$black2 = 0;
$brown2 = 1;
$red2 = 2;
$orange2 = 3;
$yellow2 = 4;
$green2 = 5;
$b1ue2 = 6;
$violet2 = 7;
$grey2 = 8;
$white2 = 9;
// <!-- third ring -->
$black3 = 1;
$brown3 = 10;
$red3 = 100;
$orange3 = 1000;
$yellow3 = 10000;
$green3 = 100000;
$b1ue3 = 1000000;
$violet3 = 10000000;
$grey3 = 100000000;
$white3 = 1000000000;
$gold4 = 0.1;
$silver4 = 0.01;
// <!-- fourth ring -->
$brown4 = 1;
$red4 = 2;
$green4 = 5;
$b1ue4 = 6;
$violet4 = 7;
$grey4 = 8;
$gold4 = 5;
$silver4 = 10;

function calc($value1,$value2,$value3,$value4){
    $result=0;
    $result = ($value1.$value2)*$value3;
    echo($result."-Ω ".$value4."-%");
};
 echo(calc($blue1,$orange2,$brown3,$grey4));
?>