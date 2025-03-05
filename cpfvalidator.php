<?php
header('Content-Type: application/json');

function validarCPF($cpf) {
    if (strlen($cpf) != 11 || preg_match('/^(\d)\1*$/', $cpf)) {
        return false;
    }
    
    // Validação do primeiro dígito
    $soma = 0;
    for ($i = 0; $i < 9; $i++) {
        $soma += $cpf[$i] * (10 - $i);
    }
    $resto = $soma % 11;
    $digito1 = ($resto < 2) ? 0 : (11 - $resto);
    
    if ($cpf[9] != $digito1) {
        return false;
    }
    
    // Validação do segundo dígito
    $soma = 0;
    for ($i = 0; $i < 10; $i++) {
        $soma += $cpf[$i] * (11 - $i);
    }
    $resto = $soma % 11;
    $digito2 = ($resto < 2) ? 0 : (11 - $resto);
    
    if ($cpf[10] != $digito2) {
        return false;
    }
    
    return true;
}

// Obtém CPF da requisição (POST ou GET), remove espaços e caracteres não numéricos
$cpf = preg_replace('/[^0-9]/', '', trim($_GET['cpf'] ?? $_POST['cpf'] ?? ''));

if ($cpf) {
    $resultado = validarCPF($cpf);
    echo json_encode([
        'cpf' => $cpf,
        'valido' => $resultado
    ]);
} else {
    echo json_encode(['erro' => 'CPF não informado']);
}

?>
