<!-- digitar o programa -->

<?php

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];


if(isset($numero1) && isset($numero2)){

    // converter para inteiro
    $numero1 = (int)$numero1;
    $numero2 = (int)$numero2;

    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $multiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;

    echo "A soma é: $soma <br>" ;
    echo "A subtração é: $subtracao <br>" ;
    echo "A multiplicação é: $multiplicacao <br>" ;
    echo "A divisão é: $divisao <br>" ;

} else{
    echo "ATENÇÂO! Por favor, forneça os valores de numero1 e numero2 pela URL";
}

?>