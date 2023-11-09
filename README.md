## PHP Test Groups

A biblioteca PHP Test Groups e uma biblioteca desenvolvida para atender os requisitos de teste agrupados.

### Documentação

Assim como sua implementação, seu uso e simples.

#### Instalação

Você pode instalar a biblioteca via composer:

```
Ainda não temos uma versão estável!
```
Caso você não utilize o Composer no seu projeto você copiar o arquivo php-test-groups.php da pasta dist/ para raiz do seu projeto,
nesse caso para escrever os testes será necessário realizar o require do arquivo  php-test-groups.php nos mesmos.

#### Uso Básico

Identificação de Arquivos de Teste
A Biblioteca PHP Test Groups identifica arquivos de teste com base na subextensão .test. Por exemplo, se você tiver um arquivo chamado unitary-test.uni.test.php, ele será considerado parte do grupo de testes uni que é a abreviação de unitários.

#### Executando Testes

Para executar todos os testes, você pode usar o seguinte comando:

```
php ./bin/php-test-groups

```

Para executar apenas um grupo específico de testes, como os testes unitários, você pode usar o comando a seguir:

```

php ./bin/php-test-groups uni

```

#### Métodos Principais

A Biblioteca PHP Test Groups oferece os seguintes métodos principais para escrever testes:

describe($description, $callback)
O método describe é usado para descrever um grupo de testes e é geralmente usado para agrupar testes relacionados. Exemplo:

```

describe("Testes de Login", function() {
    // Aqui você escreve seus testes de login
});

```

it($description, $callback)
O método it é usado para descrever um teste específico dentro de um grupo. Exemplo:

```

describe("Testes de Login", function() {
    it("deve autenticar um usuário", function() {
        // Seu código de teste aqui
    });
});

```

assertEquals($expected, $actual)
O método assertEquals é usado para verificar se o valor $actual é igual ao valor $expected. Exemplo:

```

describe("Testes de Soma", function() {
    it("deve somar dois números corretamente", function() {
        $resultado = soma(2, 3);
        assertEquals(5, $resultado);
    });
});

```

assertStrict($expected, $actual)
O método assertStrict é usado para verificar se o valor $actual é estritamente igual ao valor $expected, incluindo o tipo. Exemplo:

```

describe("Testes de Tipo", function() {
    it("deve verificar tipos estritos", function() {
        $valor = 42;
        assertStrict(42, $valor); // Passará no teste
        assertStrict("42", $valor); // Falhará no teste devido ao tipo
    });
});

```

#### Exemplos

Aqui estão alguns exemplos de como usar a Biblioteca Test para escrever testes em PHP:

```

describe("Testes de Matemática", function() {
    it("deve multiplicar dois números corretamente", function() {
        $resultado = multiplicar(4, 5);
        assertEquals(20, $resultado);
    });

    it("deve verificar tipos estritos", function() {
        $valor = 42;
        assertStrict(42, $valor); // Passará no teste
        assertStrict("42", $valor); // Falhará no teste devido ao tipo
    });
});

```