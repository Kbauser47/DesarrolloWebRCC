<?php 

$n = $_POST['n'];

function parImpar($num){
    
    $residuo = $num%2;
    return $residuo;
}

$result = parImpar($n);

if($result == 0){
    echo "El numero es par";
}else{
    echo "El numero es impar";
}




?>