<?php
$a=10;
$b=2;
echo "Adição:".($a + $b);
echo "<br>Subtração:".($a - $b);
echo "<br>Multiplicação:".($a * $b);
echo "<br>Divisão:".($a / $b);
echo "<br>Módulo:".($a % $b);
echo "<br>Exponenciação:".($a ** $b);
?>

<hr>

<?php
$a=10;
$b=2;
$a+=$b;//12
$b-=5;//-3
echo "a = ".$a;//12
echo "<br>b = ".$b;//-3
$c=11;
$d=6;
$c%=$d;//5
$d+=$a;//16
echo "<br>c = ".$c;//5
echo "<br>d = ".$d;//18, pq o a = 12 agora.
$n = "cinco";
$n.=$c;//cinco5
echo "<br>n = ".$n;
?>

<hr>

<?php
$a = "Bete ";
echo "$a <br>";
$b = "Leo ";
echo "$b <br>";

echo $a . $b;//Bete Leo

$b .= $a;//Leo Bete

echo "<br>$b";//Leo Bete
echo "<br>$a";
echo $a . $b;//Bete Leo
?>

<hr>

<?php
$x = 100;
echo "x = ".++$x;//101
echo "<br>x final = ".$x;
echo "<br>x = ".$x++;//101
echo "<br>x final = ".$x;
echo"<hr>";

$i =10;
echo "<br>i = $i";
// $i++;//10
// $i++;//11
// ++$i;//13
$i+=3;
echo "<br> i = $i";
$i--;//13
--$i;//11
echo "<br> i = $i";
?>