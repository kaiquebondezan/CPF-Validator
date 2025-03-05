CPF Validator

Um script PHP simples para validar CPFs.
Descrição

Este script PHP é projetado para validar números de CPF (Cadastro de Pessoas Físicas) brasileiros. Ele remove caracteres não numéricos do CPF, verifica se o CPF tem 11 dígitos e se não contém todos os dígitos iguais. Além disso, calcula os dígitos verificadores para garantir a validade do CPF.
Funcionalidades

    Remoção de caracteres não numéricos: O script remove automaticamente qualquer caractere que não seja um dígito do CPF.

    Verificação de tamanho: Garante que o CPF tenha exatamente 11 dígitos.

    Verificação de dígitos iguais: Impede que CPFs com todos os dígitos iguais sejam considerados válidos.

    Cálculo dos dígitos verificadores: Aplica a lógica oficial para calcular os dois últimos dígitos do CPF.

Uso

Para usar este script, basta chamar a função validarCPF($cpf) passando o CPF a ser validado como parâmetro.

php
$cpf = "12345678901";
$resultado = validarCPF($cpf);
echo json_encode([
    'cpf' => $cpf,
    'valido' => $resultado
]);

Função validarCPF($cpf)
Parâmetros

    $cpf: O número de CPF a ser validado.

Retorno

    true se o CPF for válido.

    false se o CPF for inválido.

Exemplo de Uso

php
function validarCPF($cpf) {
    // Implementação da função de validação
}

$cpf = $_GET['cpf'] ?? $_POST['cpf'] ?? null;

if ($cpf) {
    $resultado = validarCPF($cpf);
    echo json_encode([
        'cpf' => $cpf,
        'valido' => $resultado
    ]);
} else {
    echo json_encode(['erro' => 'CPF não informado']);
}

Contribuições

Contribuições são bem-vindas! Se você encontrar algum bug ou tiver sugestões para melhorar o código, por favor, abra uma issue ou envie um pull request.
Licença

Este projeto é licenciado sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.

Essa documentação fornece uma visão geral do que o script faz e como usá-lo, além de incluir informações sobre como contribuir e a licença do projeto.