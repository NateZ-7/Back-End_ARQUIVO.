<?php
$a=10;
$b="10";
echo "Igualdade = ".($a==$b)."<br>";
echo "Idêntico = ".($a===$b)."<br>";
echo "Não igual = ".($a!=$b)."<br>";
echo "Não Idêntico = ".($a!==$b)."<br>";
echo "<hr>";
$a =10;
$b= 20;
$c= 50;
$d = !($a<=$b);
echo "Operador not".var_dump($d);
echo "<hr>";
$e=($a<=$c) && !($c>1000);
echo "Operador and".var_dump($e);
echo "<hr>";
$f = !($a>$b) || ($c<1000);
echo "Operador or".var_dump($f);
echo "<hr>";
$g = (!($a<$b) xor ($b<$c));
echo "Operador xor".var_dump($g);
echo "<hr>";
$d=($a<=$b) ? "Verdadeiro" : "Falso";
$e=($a>=$c) ? "Verdadeiro" : "Falso";
echo "Operador ternário:<br>";
echo "d = $d<br>e = $e";
?>