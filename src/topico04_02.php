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

echo "<hr>";//<<<AQUI>>>Exercícios de fixação 

$num=10;
$res=($num%2==0)?"par":"impar";
echo "$num é $res";

echo "<hr>";

$y=2;
$z=3;
$x = ($y + $z) % $y;
echo "x = $x";

echo "<hr>";

$a = "dia" ;
$b = " de " ;
$c = " atividade " ;
$d = " hoje " ;
$x = $c . $d . $b . $a;
echo $x ;

echo "<hr>";

$a=10;$b=20;$c=30;$d=40;
$e=($a<$b)&&($c<$d);
$f=!($a<$b)||!($c<$d);
$g=!($a<$b)&&($c<$d);
$h=!($a<$b)||($c<$d);
echo "e" . var_dump($e) . "<br>";
echo "f " . var_dump($f) . "<br>";
echo "g" . var_dump($g) . "<br>";
echo "h " . var_dump($h) . "<br>";

echo "<hr>";

$a=10;$b=20;$c=30;$d=40;
$a+=50;
$e=($a<$b)&&($c<$d);
$f=!($a<$b)||!($c<$d);
$g=!($a<$b)&&($c<$d);
$h=!($a<$b)||($c<$d);
echo "e" . var_dump($e) . "<br>";
echo "f " . var_dump($f) . "<br>";
echo "g" . var_dump($g) . "<br>";
echo "h " . var_dump($h) . "<br>";

echo "<hr>";

$a=10;$b=20;$c=30;
$d=($a<=$b)&&($c<=30);
$e=($b<=$a)||($c<=10);
$f=($a=="10")?"OK":"Não OK";
$g=($b==20)?"OK":"Não OK";
echo "d" . var_dump($d) . "<br>";
echo "e " . var_dump($e) . "<br>";
echo "f " . var_dump($f) . "<br>";
echo "g " . var_dump($g) . "<br>";

echo "<hr>";

$a=5;
$b=2;
$c=$a + $b;
$b = 3;
$d = $c % $b ;
$a+=$b;
echo "$c $b $d";

echo "<hr>";

$a=10;$b=20;$c=30;
$d=($a<=$b)&&($c<=30);
$e=($b<=$a)||($c<=10);
$f=($a==="10")?"OK":"Não OK";
$g=($b===20)?"OK":"Não OK";
echo "d" . var_dump($d) . "<br>";
echo "e " . var_dump($e) . "<br>";
echo "f " . var_dump($f) . "<br>";
echo "g " . var_dump($g) . "<br>";

echo "<hr>";

$a = 4 ;
$b = 7 ;
$a+=$b ;
$b%=4;
echo "a=$a, b=$b";

echo "<hr>";

$a=10;$b=20;$c=30;$d=40;
$c+=50;
$e=($a<$b)&&($c<$d);
$f=!($a<$b)||!($c<$d);
$g=!($a<$b)&&($c<$d);
$h=!($a<$b)||($c<$d);

echo "e" . var_dump($e) . "<br>";
echo "f " . var_dump($f) . "<br>";
echo "g" . var_dump($g) . "<br>";
echo "h " . var_dump($h) . "<br>";

echo "<hr>";

$a=5;
$b=2;
$c=$a+$b;
$b+=2;
$d=$c%$b;
$a+=$b;
echo "$a $b $c $d";

echo "<hr>";

$a = " dia " ;
$b = " de " ;
$c = " atividade " ;
$d = " hoje " ;
$x = $d . $a . $b . $c;
echo $x ;

echo "<hr>";

$a=10;$b=20;$c=30;$d=40;
$e=($a<$b)&&($c<$d);
$f=!($a<$b)||!($c<$d);
$g=!($a<$b)&&($c<$d);
$h=!($a<$b)||($c<$d);
echo "e" . var_dump($e) . "<br>";
echo "f " . var_dump($f) . "<br>";
echo "g" . var_dump($g) . "<br>";
echo "h " . var_dump($h) . "<br>";

echo "<hr>";

$y=2;
$z=3;
$x = $y + $z % $y;
echo "x = $x";
?>