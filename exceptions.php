<?php

function validarUsuario(array $usuario) {
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        throw new Exception("Campos obrigatórios não foram preenchidos!\n");
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 34,
];

try {
    $status = validarUsuario(($usuario));
} catch (Exception $e) {
    echo $e->getMessage();
    die(); // acaba com o processo
}

echo "\n... executando ...\n";