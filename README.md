# Trabalho Engenharia de Software

- Grupo:
    - Alexandre;
    - Beatrice;
    - Ezequiel;
    - Fernando;
    - Logan;
    - Pedro;


- Requisitos:
    - Apache 2
    - PHP 5
        - php5_mysqlnd
    - MySQL

- Estrutura de arquivos:
    - includes/
        - connect.php -> Arquivo de conex�o ao banco;
    - layout/
        - background.jpg -> Imagem de fundo;
    - styles/
        - LondrinaShadow-Regular.ttf - Fonte da p�gina;
        - estilo.css -> Estilo da p�gina;
        - pure-min.css -> Framework compat�vel com navegadores;
    - template/
        - cadastro.body.php -> Copo da p�gina de cadastro
        - head.php -> Cabe�alho padr�o do site;
        - index.body.php -> Corpo da p�gina inicial;
    - README.md -> Arquivo de Manual
    - bmo.sql -> Arquivo para importa��o de SQL;
    - cadastro.php -> P�gina inicial;
    - index.php -> P�gina inicial;


- Implementa��o:
    - Reposit�rio: https://github.com/pedroluizsro/trabalho_engenharia_software.git
    - Efetue o Checkout do reposit�rio acima no diret�rio de acesso do Apache.
        - Diret�rio padr�o do Apache: /var/www/html
    - Efetue a importa��o da base de dados atrav�s de alguma ferramenta ou console;
        - Arquivo: bmo.sql
    - Edite o arquivo "includes/connect.php" com os dados de conex�o do banco;
    - Teste o acesso ao website;


- Observa��es:
    - Os arquivos devem estar com as permiss�es de acordo para efetuar o Upload do arquivo, sabendo que o Apache move o arquivo at� o diret�rio, � necess�rio que o usu�rio e grupo dono dos arquivos sejam o mesmo do Apache.


- Plano de contig�ncia:
    - Caso haja alguma dificuldade na abertura do site:
        - Verificar permiss�es de arquivo;
        - Verificar configura��es de infraestrutura;
        - Certificar-se de que as seguintes portas estejam abertas: 80(HTTP), 3306(MySQL);
        - Repetir o processo de implementa��o.
    - Caso haja dificuldades na cria��o da festa:
        - Verificar se o arquivo inserido � uma imagem;
        - Verificar a permiss�o de escrita no diret�rio "images/"
