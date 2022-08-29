<link rel="stylesheet" href="css/estilo.css">
<script src="js/script.js"></script>


<?php
//Array
$carros = array();
//
$carros = ["BMW", "Gol", "Saveiro", "Hilux"];

for ($i = 0; $i < count($carros); $i ++)
{
    echo "<li> $carros[$i] </li>";
}
echo "</ul>";

echo "<pre>";
print_r($carros);
echo "</pre>";

$nomes = array("Aragorn", "Legolas", "Gimili", "Gandalf", "Frodo");
echo "<pre>";
print_r($nomes);
echo "</pre>";

$nomes[567] = "Galadriel";

array_push($nomes, "Elrond");

echo "<pre>";
print_r($nomes);
echo "</pre>";

array_push($nomes, "Sauron");
echo "<pre>";
print_r($nomes);
echo "</pre>";

array_pop($nomes);
echo "<pre>";
print_r($nomes);
echo "</pre>";

$carros["Eletricos"] = "Tesla";

echo "<pre>";
print_r($carros);
echo "</pre>";

$cadastro = array();

$pessoa1 = array ("Id" => 1, "Nome" => "Melkor", "CPF"=> "123");
$pessoa2 = array ("Id" => 2, "Nome" => "Saruman", "CPF"=> "456");
$pessoa3 = array ("Id" => 3, "Nome" => "WitchKing", "CPF"=> "789");

$cadastro["Cliente"] = $pessoa1;
array_push($cadastro, $pessoa2);
array_push($cadastro, $pessoa3);

echo "<pre>";
print_r($cadastro);
echo "</pre>";

//Criar 10 numeros aleatorios
$negativos = 0;
$positivos = 0;

for ($i = 0; $i < 10; $i ++) {
    $num[$i] = rand(-10, 10);
    if ($num[$i] < 0)
        { $negativos++;} else { $positivos++;}
    }

echo "<pre>";
print_r($num);
echo "</pre>";

echo "<h2>Negativos: $negativos Positivos $positivos</h2>";


 
?>