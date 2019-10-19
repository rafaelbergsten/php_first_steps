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

$novasContasCorrentes = [
    1234567890 => [
        'titular' => 'Rafael',
        'saldo' => 12000
    ],
    1234567891 => [
        'titular' => 'Heidi',
        'saldo' => 12010
    ],
    1234567892 => [
        'titular' => 'Daniel',
        'saldo' => 12020
    ]
];

$novasContasCorrentes['11111111111'] = [
    'titular' => 'Charlie',
    'saldo' => 12390
];

foreach ($novasContasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}