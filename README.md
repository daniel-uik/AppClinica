# AppClinica - React Native

Este repositório contém um aplicativo React Native para uma clínica médica, incluindo funcionalidades básicas como adição, atualização, exclusão e visualização de pacientes.

## Estrutura do Projeto

O projeto está organizado nas seguintes pastas:

- **components:** Contém componentes reutilizáveis.
- **screens:** Contém as diferentes telas do aplicativo.
- **styles:** Arquivos de estilo para manter a consistência visual.

## Navegação

O React Navigation é utilizado para a navegação entre telas. Certifique-se de ter a versão mais recente para acessar as últimas funcionalidades.

## Componentes Principais

### HomePaciente

A tela principal do aplicativo, oferecendo botões de navegação para diferentes funcionalidades.

### GetP

Exibe uma lista de pacientes recuperados de uma API. Utiliza o método GET para obter dados do servidor.

### PostP

Permite adicionar novos pacientes à base de dados. Utiliza o método POST para enviar dados ao servidor.

### PutP

Permite atualizar informações de pacientes existentes. Utiliza o método PUT para enviar dados atualizados ao servidor.

### DeletePaciente

Permite excluir um paciente da base de dados. Utiliza o método DELETE para enviar a solicitação ao servidor.