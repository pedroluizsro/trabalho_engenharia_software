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
        - connect.php -> Arquivo de conexão ao banco;
    - layout/
        - background.jpg -> Imagem de fundo;
    - styles/
        - LondrinaShadow-Regular.ttf - Fonte da página;
        - estilo.css -> Estilo da página;
        - pure-min.css -> Framework compatível com navegadores;
    - template/
        - cadastro.body.php -> Copo da página de cadastro
        - head.php -> Cabeçalho padrão do site;
        - index.body.php -> Corpo da página inicial;
    - README.md -> Arquivo de Manual
    - bmo.sql -> Arquivo para importação de SQL;
    - cadastro.php -> Página inicial;
    - index.php -> Página inicial;


- Implementação:
    - Repositório: https://github.com/pedroluizsro/trabalho_engenharia_software.git
    - Efetue o Checkout do repositório acima no diretório de acesso do Apache.
        - Diretório padrão do Apache: /var/www/html
    - Efetue a importação da base de dados através de alguma ferramenta ou console;
        - Arquivo: bmo.sql
    - Edite o arquivo "includes/connect.php" com os dados de conexão do banco;
    - Teste o acesso ao website;


- Observações:
    - Os arquivos devem estar com as permissões de acordo para efetuar o Upload do arquivo, sabendo que o Apache move o arquivo até o diretório, é necessário que o usuário e grupo dono dos arquivos sejam o mesmo do Apache.


- Plano de contigência:
    - Caso haja alguma dificuldade na abertura do site:
        - Verificar permissões de arquivo;
        - Verificar configurações de infraestrutura;
        - Certificar-se de que as seguintes portas estejam abertas: 80(HTTP), 3306(MySQL);
        - Repetir o processo de implementação.
    - Caso haja dificuldades na criação da festa:
        - Verificar se o arquivo inserido é uma imagem;
        - Verificar a permissão de escrita no diretório "images/"
