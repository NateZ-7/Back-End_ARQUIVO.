<h1> pg02_1 - 12/03/26</h1>
<?php
$idade = 34;
echo "idade = $idade<br>";
$cep = "01012123";
echo "cep = $cep<br>";
/*
Bases
Decimal 0123456789 10
Binaria 01 10
Octal 01234567 10
Hexadecimal 0123456789ABCDEF 10
Por isso a númeração do cep está em String
*/
$preco = 5247.543;
echo "preço = R$ ";
echo number_format($preco,2, ",", ".");
//number_format(numero, casas_decimais, separador_decimal, separador_milhar)
echo "<hr>";
$cor = "red"; //assim podemos apenas trocar a cor do texto aqui.
echo "cor = $cor<br>";
echo 'cor = $cor<br>';
echo "<h2 style='color:blue;'>Outro Titulo 2</h2>";
echo "<h2 style='color:$cor;'>Outro Titulo 2</h2>";
echo "<hr>";
$ativo = TRUE;
echo "Está ativo? $ativo<br>";
echo "<hr>";
$nota = 7.8;
echo "nota = ".$nota - (int)$nota;
// Ele não arredonda, apenas mostra a parte inteira do número: 7.
?>
<!-- <h2 style="color:blue;">Titulo 2</h2> -->