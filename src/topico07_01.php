<?php
echo "<h1>While</h1>";
$i=0;
while($i<=10){
    echo " $i";
    $i+=2;
}
/*
Saída: 0 1 2 3 4
1) Valor inicial?
R: 0
2) Condição?
R: Enquato for menor que 5, ($i<5)
3) Contador?
R: Incremento, $i++
4) Quantas vezes o looping foi executado?
R: 5 vezes
5) Qual o valor que tornou a condição falsa?
R: 5
-------------
Saída: 11 12 13 14
1) Valor inicial?
R: 11
2) Condição?
R: Enquato for menor que 15, ($i<15)
3) Contador?
R: Incremento, $i++
4) Quantas vezes o looping foi executado?
R: 4 vezes
5) Qual o valor que tornou a condição falsa?
R: 15
--------------
Saída: 4 3 2 1 0
1) Valor inicial?
R: 4
2) Condição?
R: Enquato for maior que 0, ($i>=0)
3) Contador?
R: Decremento, $i--
4) Quantas vezes o looping foi executado?
R: 5 vezes
5) Qual o valor que tornou a condição falsa?
R: -1
--------------

Saída: 0 2 4 6 8 10
1) Valor inicial?
R: 0
2) Condição?
R: Enquato for menor que 10, ($i<=10)
3) Contador?
R: $i+=2
4) Quantas vezes o looping foi executado?
R: 6 vezes
5) Qual o valor que tornou a condição falsa?
R: 12
*/
echo "<h1>Do while</h1>";
$i=7;
do{
    echo " $i";
    $i++;
}while($i<5);
// Ele executa pelo menos uma vez, depos ele verifica
echo"<h1>For</h1>";
for($i=0;$i<5;$i++){
    echo " $i";
}
echo "<h1>Looping aninhado</h1>";
for($i=4;$i<7;$i++){
    for($j=0;$j<3;$j++){
        echo "$i $j<br>";
    }
}
?>