<?php 

$idade = 21;
$nome = "Rafael";

echo "Você só pode entrar se tiver mais de 18 anos\n";

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar";
} else {
    if ($idade >= 16 && numeroDePessoas > 1) {
        echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
    } else {
        echo "Você só tem $idade anos. Você não pode entrar";
    }
}


if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar";
} else if ($idade >= 16 && numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}


if ($idade == 18) {
    echo "Você tem exatemente $idade anos. Pode entrar";
}

if ($idade == 18 || $idade > 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}

if ($idade >= 18 and $nome == 'Rafael') {
    echo "Você tem $idade anos. E seu nome e Rafael. " . PHP_EOL;
    echo "Pode entrar";
}