<?php
session_start();

$arrNum = $_SESSION["num"];

$rn = mt_rand(1, 90);

if (empty($arrNum)){
    echo json_encode(["good"=>"end"]);
    die;
}

if (in_array($rn,$arrNum)){
    $i=array_search($rn,$arrNum);
    unset($arrNum[$i]);
    $_SESSION["num"]=$arrNum;
    echo json_encode(["good"=>$rn]);
}else{
    echo json_encode(["bed"=>$rn]);
}
