<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Endereçamento IP</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
</html>


<?php


 $trinca1 = $_GET['primeiro'];
 $trinca2 = $_GET['segundo'];
 $trinca3 = $_GET['terceiro'];
 $trinca4 = $_GET['quarto'];
 $mask    = $_GET['mask'];

echo "<h1>Ip digitado foi: ";
 echo $trinca1.".";

 echo $trinca2.".";

 echo $trinca3.".";

 echo $trinca4."/";

 echo $mask;

 echo "</h1>";

 $restomasc= 32-$mask;
 $end=pow(2,$restomasc);

 echo "<h1>Numero de sub-redes:</h1>";
$subredes = 256/$end;
echo $subredes;


echo "<h1>Numero de endereços por sub-rede:</h1>";
echo $end;


echo "<h1>Numero de Hosts:</h1>";
$host=$end - 2;
echo $host;


echo "<h1>Localizado na Sub-Rede:</h1>";

$subrede = (int)($trinca4/$end);
echo $subrede;


echo "<h1>O valor da rede em que o endereço se encontra:</h1>";
$rede = $end * $subrede ;
echo $rede;

echo "<h1>O primeiro endereço da rede:</h1>";
$primeiro = $rede + 1;
echo $primeiro;


$broadcast = ($rede + $end)-1;


echo "<h1>O último endereço da rede:</h1>";
$ultimo= $broadcast-1;
echo $ultimo;


echo "<h1>O valor de broadcast</h1>";

echo $broadcast;


echo "<h1>mascara decimal</h1>";
$fimmask = 256-$end;
echo "255.255.255.".$fimmask;



echo "<h1>Publico ou Privado</h1>";
if(($trinca1 == '10')
 or ($trinca1=='127')
  or ($trinca1=='172' and $trinca2>='16' and $trinca2<='32')
  or ($trinca1 == '192' and $trinca2 == '168')
){
  echo "<h4>Privado";
}else{
  echo "<h4>Publico";
};

echo "<h1>A classe que o IP pertence</h1>";

if( $trinca1>='0' and $trinca1<='127'
and $trinca2>='0' and $trinca2<='255'
and $trinca4>='0' and $trinca4<='255'
and $trinca3>='0' and $trinca3<='255'
){
   echo " classe A </h4>";
 }elseif( $trinca1>='128' and $trinca1<='191'
      and $trinca2>='0' and $trinca2<='255'
      and $trinca4>='0' and $trinca4<='255'
      and $trinca3>='0' and $trinca3<='255'
 ){
   echo " classe B </h4>";
 }elseif ( $trinca1>='192' and $trinca1<='223'
       and $trinca2>='0' and $trinca2<='255'
       and $trinca4>='0' and $trinca4<='255'
       and $trinca3>='0' and $trinca3<='255'
 ){
   echo " classe C </h4>";
 }elseif ( $trinca1>='224' and $trinca1<='239'
       and $trinca2>='0' and $trinca2<='255'
       and $trinca4>='0' and $trinca4<='255'
       and $trinca3>='0' and $trinca3<='255'
 ){
   echo " classe D </h4>";
 }elseif ( $trinca1>='240' and $trinca1<='255'
       and $trinca2>='0' and $trinca2<='255'
       and $trinca4>='0' and $trinca4<='255'
       and $trinca3>='0' and $trinca3<='255'
 ){
   echo " classe E";
 }else{
   echo "ip invalido";
 }
