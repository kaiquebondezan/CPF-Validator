CPF Validator

Um script PHP simples para validar CPFs.

Este script é projetado para validar números de CPF (Cadastro de Pessoas Físicas). Ele remove caracteres não numéricos do CPF, verifica se o CPF tem 11 dígitos e se não contém todos os dígitos iguais. Além disso, calcula os dígitos verificadores para garantir a validade do CPF.

Funcionalidades

    Remoção de caracteres não numéricos: O script remove automaticamente qualquer caractere que não seja um dígito do CPF.

    Verificação de tamanho: Garante que o CPF tenha exatamente 11 dígitos.

    Verificação de dígitos iguais: Impede que CPFs com todos os dígitos iguais sejam considerados válidos.

    Cálculo dos dígitos verificadores: Aplica a lógica oficial para calcular os dois últimos dígitos do CPF.

Uso

Para usar este script, basta chamar a função validarCPF($cpf) passando o CPF a ser validado como parâmetro.

Função validarCPF($cpf)
Parâmetros

    $cpf: O número de CPF a ser validado.

Retorno

    true se o CPF for válido.

    false se o CPF for inválido.

Teste

    Suba o servidor local utilizando o comando padrão (php -S localhost:8000).

    Configure o request (GET ou POST) pelo Postman ou algum programa parecido e configure a url ex: http://localhost:8000/cpfvalidator.php?cpf=1234567815
    