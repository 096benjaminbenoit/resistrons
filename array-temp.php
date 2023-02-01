<?php
$ring1 = array("black"=>0,"brown"=>1,"red"=>2,"orange"=>3,"yellow"=>4,"green"=>5,"blue"=>6,"violet"=>7,"grey"=>8,"white"=>9);
$ring2 = array("black"=>0,"brown"=>2,"red"=>2,"orange"=>3,"yellow"=>4,"green"=>5,"blue"=>6,"violet"=>7,"grey"=>8,"white"=>9);
$ring3 = array("black"=>1,"brown"=>10,"red"=>100,"orange"=>1000,"yellow"=>10000,"green"=>100000,"blue"=>1000000,"violet"=>10000000,"grey"=>100000000,"white"=>1000000000,"gold"=>0.1,"silver"=>0.01);
$ring4 = array("brown"=>1,"red"=>2,"green"=>0.5,"blue"=>0.25,"violet"=>0.10,"grey"=>0.05,"gold"=>5,"silver"=>10);
function calc($first,$second,$third,$fourth){
    $result=0;
    $result = ($first.$second)*$third;
    echo($result."-Ω ".$fourth."-%");
    
};
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
}

?>