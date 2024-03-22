# Calculadora de Preços Albion

## Descrição do Projeto

A "Calculadora de Preços Albion" é uma aplicação web projetada para ajudar os jogadores de Albion Online a obter informações sobre os preços de vários elementos do jogo em diferentes cidades. A aplicação permite aos usuários selecionar um item, especificar sua qualidade, nível e encantamento, e então consulta a API do Albion Online para obter dados sobre os preços de compra e venda em várias cidades.

## Estrutura do Projeto

O projeto é organizado da seguinte forma:

- **index.php**: Arquivo principal que contém a estrutura HTML da aplicação, os elementos da interface do usuário e a inclusão de arquivos JS e PHP necessários.

- **data/opciones.php**: Arquivo PHP que inclui dados de diferentes categorias, como roupas, offhands, consumíveis, capas e artefatos.

- **assets/js/Main.js**: Arquivo JavaScript que gerencia a lógica principal da aplicação, incluindo a solicitação de dados à API do Albion Online e a apresentação de resultados.

- **assets/js/Hora_UTC.js**: Arquivo JavaScript que atualiza e exibe a hora UTC na interface do usuário.

- **assets/js/modoOscuro.js**: Arquivo JavaScript que implementa a funcionalidade de modo escuro e salva a preferência do usuário no armazenamento local.

## Uso da Aplicação

1. **Início**: Abra o arquivo `index.php` em um navegador da web para iniciar a aplicação.

2. **Seleção do Item**: Use o menu suspenso para selecionar um item de interesse.

3. **Configuração Detalhada**: Escolha o nível, qualidade e encantamento do item para obter resultados mais precisos.

4. **Consulta de Preços**: Clique no botão "Consultar Preços" para obter informações sobre os preços em diferentes cidades.

5. **Resultados Visuais**: Os resultados serão exibidos na interface, incluindo o preço mínimo e máximo de compra e venda em cada cidade.

6. **Modo Escuro**: Você pode alternar o modo escuro clicando no botão com o ícone da lua.

## Recomendações e Dicas

- **Atualização Automática**: A hora UTC é atualizada automaticamente a cada segundo para mantê-lo informado.

- **Gráficos Visuais**: Um gráfico visual que mostra os preços mínimos e máximos de venda por cidade está incluído.

- **Persistência do Modo Escuro**: Sua preferência de modo escuro é salva localmente para persistir mesmo após fechar e reabrir a aplicação.

## Avisos Importantes

- **Dados em Tempo Real**: A aplicação depende da API do [Albion Data Project](https://www.albion-online-data.com/) e requer conexão com a internet para obter dados atualizados.

- **Formato de Encantamento**: Os encantamentos são indicados com um número, por exemplo, "Encantamento 1". Certifique-se de selecionar o encantamento correto.

## Colaboradores

- **Backend**: [TomasB/TomasB-Dev]
- **Frontend**: [TomasB/TomasB-Dev - IgnacioJulian]

## Licença

Este projeto está sob a Licença [LICENSE.md](LICENSE.md).

---
