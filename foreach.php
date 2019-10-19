<?php 

$conta1 = [
    'titular' => 'Rafael',
    'saldo'=> 1000
];

$conta2 = [
    'titular' => 'Heidi',
    'saldo'=> 2000
];

$conta3 = [
    'titular' => 'Daniel',
    'saldo'=> 3000
];

$contasCorrentes = [
    12345678901 => $conta1, 
    25980564500 => $conta2, 
    12345678900 => $conta3
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}