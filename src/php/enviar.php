<?php

include 'AES.php';

$archivo=@ fopen('clave.txt', 'r') or die ('Error no se encontro la llave privada');

$texto = 'Entrada';

while(!feof($archivo)) {
    $traer = fgets($archivo);
}

if ($traer == $texto) {
    $cryption = (string)$_POST['cryption'];
    $aes = new \Legierski\AES\AES();
    $hash = '11a2976e56b62e0069b25f38bab06811';
    $decrypted = $aes->decrypt($cryption, $hash);
    echo $decrypted;
} else {
    echo 'Sin acceso';
}