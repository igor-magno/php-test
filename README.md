## Test

A Biblioteca Test é uma ferramenta poderosa para escrever e executar testes automatizados em PHP. Com a capacidade de agrupar testes por subextensões de arquivos e uma variedade de métodos de asserção, você pode garantir a qualidade do seu código de maneira eficaz.

Lembre-se de consultar a documentação oficial da Biblioteca Test para obter mais detalhes sobre seus recursos e opções avançadas.

### Documentação

A Biblioteca Test é uma ferramenta que facilita a criação de testes automatizados em PHP. Ela permite identificar e agrupar testes com base em subextensões de arquivos e oferece métodos para escrever e executar testes. Neste guia, você aprenderá como usar a Biblioteca Test para escrever testes eficazes em seus projetos PHP.

#### Instalação
Para começar a usar a Biblioteca Test, você precisa instalá-la em seu projeto PHP. Você pode fazer isso usando o Composer:

```

```

#### Uso Básico

Identificação de Arquivos de Teste
A Biblioteca Test identifica arquivos de teste com base na subextensão .test. Por exemplo, se você tiver um arquivo chamado unitary-test.uni.test.php, ele será considerado parte do grupo de testes unitários.

#### Executando Testes

Para executar todos os testes, você pode usar o seguinte comando:

```
php test

```

Para executar apenas um grupo específico de testes, como os testes unitários, você pode usar o comando a seguir:

```

php test uni

```

#### Métodos Principais

A Biblioteca Test oferece os seguintes métodos principais para escrever testes:

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