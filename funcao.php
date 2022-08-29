<link rel="stylesheet" href="css/estilo.css">
<script src="js/script.js"></script>

<?php
function QuebraLinha()
{
    echo "<br>";
}
function ImprimirTexto($texto)
{
    echo $texto;
    QuebraLinha();
}

//ImprimirTexto ("Minha chanada de função");
//ImprimirTexto ("Minha chanada de função 2");
//ImprimirTexto ("Minha chanada de função 3");

//echo "<img src='https://www.php.net//images/logos/new-php-logo.svg' alt='PHP' />";


//Calculadora abaixo

function Adicao($numero1, $numero2) {
    return ( $numero1 + $numero2);
}
function Subtracao($numero1, $numero2) {
    return ( $numero1 - $numero2);
}
function Multiplicacao($numero1, $numero2) {
    return ( $numero1 * $numero2);
}
function Divisao($numero1, $numero2) {
    return ( $numero1 / $numero2);
}
function Resto($numero1, $numero2) {
    return ( ($numero1 % $numero2));
}


function Media($numero1, $numero2) {
    return Adicao($numero1, $numero2) / 2;
}
ImprimirTexto ("A adição entre 8 e 7 é: ". Adicao (8,7));
ImprimirTexto ("A subtração entre 8 e 7 é: ". Subtracao(8,7));
ImprimirTexto ("A Multiplicação entre 8 e 7 é: ". Multiplicacao(8,7));
ImprimirTexto ("A Divisão entre 8 e 7 é: ". Divisao(8,7));
ImprimirTexto ("O Resto da divisão entre 8 e 7 é: ". Resto(8,7));
ImprimirTexto ("A média entre 8 e 7 é: ". Media(8,7));

//Calculadora com escolha de operacao
function LendariaCalculadora ($numero1, $numero2, $operacao) {
    if ($operacao == "+") {
        $resultado = Adicao($numero1, $numero2);
    } else if ($operacao == "-") {
        $resultado = Subtracao($numero1, $numero2);
    } else if ($operacao == "*") {
        $resultado = Multiplicacao($numero1, $numero2);
    } else if ($operacao == "/") {
        $resultado = Divisao($numero1, $numero2);
    } else if ($operacao == "media") {
        $resultado = Media($numero1, $numero2);
    } else if ($operacao == "resto") {
        $resultado = Resto($numero1, $numero2);
    } else {
        $resultado = "Operação Inválida";
    }
    ImprimirTexto($resultado);   
}

LendariaCalculadora (10, 20, "*");


?>
