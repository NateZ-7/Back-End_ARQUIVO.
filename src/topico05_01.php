<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Par - Ìmpar</h1>
    <form method="post" action="">
        Digite um número<input type="number" id="num" name="num" required><br>
        <input type="submit" value="verificar">
    </form>
    <?php
        if(count($_POST)==0) exit; //É para o código não gerar erro com 0 de envio.
        $num=$_POST["num"];
        $res=($num%2==0)?"PAR":"ÌMPAR";

        echo "$num é $res";
    ?>
</body>
</html>