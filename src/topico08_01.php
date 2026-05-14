<?php
$nomes=["Fulano","Beltrano","Sicrano", "Astrogildo"];
$total = count($nomes);
echo "Foram encontradas $total nomes no array.<br>";
echo "Primeiro valor do array: ".$nomes[0]."<br>";
echo "Último valor do array: ".$nomes[count($nomes)-1];
echo "<hr>";
for($i=0;$i<count($nomes);$i++){
	echo $nomes[$i]."<br>";
}
echo "<hr>";
?>

<?php
$uf=["SP","RJ","ES","MG"];
echo "<pre>";print_r($uf);echo "</pre>";
array_push($uf, "TO");
array_push($uf, "BA");
array_push($uf, "RN");
array_push($uf, "PR");
array_pop($uf);
echo "<pre>";print_r($uf);echo "</pre>";
sort($uf);
echo "<pre>";print_r($uf);echo "</pre>";
?>

<hr>
UF<select name="uf">
<option>Selecione Estado</option>
<?php
for($i=0; $i<count($uf);$i++){
    echo "<option>".$uf[$i]."</option>";
}
?>
</select>
<hr>

<?php
$estudante = [
    "id"=>1,
    "nome"=>"Bete",
    "Nota"=>9.5
];
foreach($estudante as $pos=>$valor){
    echo "<br>$pos: $valor";
}
?>