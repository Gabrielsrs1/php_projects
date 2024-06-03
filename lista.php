<?php

//Criando array

$produtos = [
    "Manga" => 1.99,
    "Uva" => 7.99,
    "Laranja" => 2.49
];
//Exibir preços da lista
echo "Lista preços: \n";
foreach($produtos as $produto => $preco)
{
   
    echo $produto." custa R$".$preco."\n";
}

$total = 0;
foreach($produtos as $preco){
    $total += $preco;
}
echo "O total é R$".$total;

?>
