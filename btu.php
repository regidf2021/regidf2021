<?php
//Esse código calcula o nº de Btus necessários de um ar condicionado para refrigerar um ambiente.
define("BTU",600);
echo"<br>";
$metragemsala=20;
$quantpessoas=3;
$quantaparelhos=4;
$totaldeBTU=($metragemsala*(BTU))+($quantpessoas*(BTU))+($quantaparelhos*(BTU));
echo "Esse programa calcula quantos BTU´s, o aparelho de ar condicionado precisa ter para refrigerar uma sala de: ".$metragemsala, "metros";
echo"<br>";
echo "A quantidade de pessoas na sala será:".$quantpessoas, "pessoas";
echo "<br>";
echo "O Número de aparelhos que a sala possui:".$quantaparelhos, "aparelhos";
echo "<br>";
echo "O valor da constante é ".(BTU);
echo "<br>";
echo "O Aparelho de ar condicionado precisa ter:".$totaldeBTU, "BTUS";
?>
