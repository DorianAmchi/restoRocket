<?php
include 'restaurants.php';

$user=array(
    'username'=>'dodo',
    'password'=>'dodo'
);
$restos = array();
$restaurants = get_restaurants();
foreach($restaurants as $restaurant){
    $resto = array();
    foreach($restaurant as $key => $value){
        if(!is_numeric($key)){
            $temp=array(
            $key => $value
        );
            array_push($resto, $temp);
        }
        
    }   
    array_push($restos, $resto);

}

   var_dump($restos);