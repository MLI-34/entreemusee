<?php

function afficherTarif(){

    $var_age=$_POST['age'];

// pour les 15 ans et plus tarif 10€

if($var_age>=15) {
    $tarif = 10;
// les moins de 8 ans gratuit

}elseif($var_age<8){
    $tarif = 0;

// pour les entre 15 et 8 ans tarif 5€
// }elseif ($var_age<15 && $var_age>=8) {
}else {
    
    $tarif = 5;
}

$msg = 'le Tarif est de : '.$tarif.'€';
var_dump($msg);

return $msg;

};
echo afficherTarif()
?>