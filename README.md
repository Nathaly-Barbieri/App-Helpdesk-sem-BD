Esse projeto foi criado com a ajuda de um curso da Udemy, meu objetivo com ele agora é revisar o código e melhorar a lógica de programação.

Ele é um sistema de registro de chamados e controle de acesso usando o recurso de sessão do browser que salva as informações em um arquivo através da função fopen (e outras) do php.

Para rodar o projeto você precisa usar seu servidor local, e posicionar a pasta desse commit (https://github.com/Nathaly-Barbieri/App-Helpdesk-sem-BD/commit/1a7394b65477c02aa877717aa7d51cfd0ab129e5) fora da pasta publica:

+ Se você estiver rodando via xammp, é só colocar a pasta fora do htdocs.
+ Senão, você abre o arquivo valida_login.php e coloca a localização do arquivo como preferir (eu recomendo que seja fora da sua pasta publica por questões de segurança).

  Ou seja:

  + você clona
  + abre o terminal no endereço da pasta
  + inicia o servidor local
  + pega a pasta app_help_desk do commit que passei (ou você cria ela manualmente e só copia os códigos)
  + coloca a nova pasta fora da pasta que você está rodando o projeto
  + adiciona a localização da pasta app_help_desk no arquivo App-Helpdesk-sem-BD\valida_login.php

  pronto!
