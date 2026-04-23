<?php
$idade = 17;

if ($idade >= 18) {
    echo "Você é maior de idade.";
}
else {
    echo "Você é menor de idade.";
}
?>
<hr>
<?php
$semaforo="verde";
if ($semaforo=="verde") {
    echo "Siga";
}
elseif ($semaforo=="amarelo"){
    echo "Atenção!";
}
elseif ($semaforo=="vermelho"){
    echo "PARE!";
}
else echo "Cor desconhecidda";

switch ($semaforo){
    case "verde":
        echo "SIGA";
        break;
    case "amarelo":
        echo "ATENÇÃO!";
        break;
    case "vermelho":
        echo "PARE!";
        break;
    default:
        echo "OLHA DE NOVO!";
}

echo "<hr>";

$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
echo "<hr>";
date_default_timezone_set('America/Sao_Paulo');
echo date("d/m/Y H:i:s");
?>
<hr>
<?php
$nome= "uninove";
echo "nome = $nome";
echo "<br>MD5 = ".md5($nome);
$hash = password_hash($nome, PASSWORD_DEFAULT);
echo "<br>Hash = $hash";
?>

<hr>
