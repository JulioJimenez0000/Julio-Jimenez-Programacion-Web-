<?php

$grados = $_GET['grados'];

$ConvertirG = ($grados - 32);
$ConvertirG = $ConvertirG * (5/9);

echo $ConvertirG;

?>
