# PHPUnit para Clínica Médica

Este repositório contém testes unitários para as classes do projeto da Clínica Médica. Os testes ajudam a garantir que as funcionalidades do seu código estejam funcionando corretamente, identificando possíveis problemas antes que eles afetem o ambiente de produção.

## Requisitos

Antes de começar, verifique se você atende aos seguintes requisitos:

- [Composer](https://getcomposer.org/) instalado no seu ambiente.
- PHP instalado no seu ambiente.

## Instalação

Siga estas etapas para configurar o ambiente e instalar as dependências necessárias:

1. Clone este repositório para o seu ambiente local.
2. Abra um terminal e navegue até a pasta raiz do projeto.
3. Execute o comando `composer init` para inicializar o Composer (caso ainda não tenha um `composer.json`).
4. Execute o comando `composer require --dev phpunit/phpunit` para instalar o PHPUnit como uma dependência de desenvolvimento.
5. Execute o comando `composer exec -m` para garantir que as dependências estejam atualizadas.
6. Execute o comando `composer dump-autoload -o` para gerar o carregamento automático das classes.

Agora, você tem todas as dependências instaladas e está pronto para executar os testes.

## Executando os Testes

Para executar os testes, use o seguinte comando no terminal:

`./vendor/bin/phpunit tests`

Os testes serão executados, e você verá os resultados no terminal.

## Configuração do Xdebug

Se você estiver usando o XAMPP ou um servidor similar e desejar habilitar a cobertura de código com o Xdebug, siga estas etapas adicionais:

Baixe o arquivo [PHP XDEBUG](https://xdebug.org/files/php_xdebug-3.2.2-8.2-vs16-x86_64.dll) e coloque-o na pasta ./xampp/php/ext.

Abra o arquivo php.ini localizado na pasta de configuração do PHP.

Cole o seguinte código no arquivo php.ini após a diretiva [XSL]:

[xdebug]
zend_extension ="C:/xampp/php/ext/php_xdebug-3.2.2-8.2-vs16-x86_64.dll"
xdebug.remote_enable = off
xdebug.profiler_enable = off
xdebug.profiler_enable_trigger = Off
xdebug.profiler_output_name = cachegrind.out.%t.%p
xdebug.profiler_output_dir ="C:/xampp/tmp"
xdebug.show_local_vars=0


Ajuste o caminho do zend_extension de acordo com a localização do arquivo php_xdebug-3.2.2-8.2-vs16-x86_64.dll.

Salve o arquivo php.ini.

Abra o Git Bash e execute o seguinte comando para executar os testes com cobertura de código:

`$ XDEBUG_MODE=coverage ./vendor/bin/phpunit tests --coverage-html coverage --coverage-filter app/libraries`