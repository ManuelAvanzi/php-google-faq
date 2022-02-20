<?php

$requiredKeys=["name","surname"];
$foundedKeys=0;

foreach($_GET as $key => $value){
    echo "$key - $value<br>";

    if(in_array($key, $requiredKeys)){
        $foundedKeys++;
    }
}

if($foundedKeys===count($requiredKeys)){
    echo "tutto ok ";
}else{
    echo "chiavi mancanti";
}