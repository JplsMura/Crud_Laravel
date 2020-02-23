Para a clonagem e ultização deste repositório necessita-se de determinadas ferramentas para sua ultilização:

1° XAMPP: Para startar a aplicação o mesmo deve estar dentro da pasta HTDOCS do XAMPP, para que seje reconhecido pelo APACHE e rode localmente na sua máquina.

2° MYSQL Workbench ou qualquer outra ferramenta de manipulação de arquivos SQL, pois precisara rodar as comando de estrutura e criação das tabelas ao qual o sistema necessita.

3° Caso queria verificar/editar o código para teste recomendo a ultilização do Visual Studio Code, ou qualquer outro editor de texto e/ou IDE de sua preferência.

PASSO - A - PASSO

1° Clone o repositório para a pasta do HTDOCS do XAMPP ao qual mencionei acima.

2° Abra o arquivo .SQL no MYSQL WORKBENCH ou qualquer outra ferramente de manipulação de SQL.

3° Rode os comando de criação do BANCO, e das tabelas na sequência que está sendo feito nos comentário do arquivo .sql e os execute.

4° Abra a pasta crud_teste ao qual clonou em uma IDE ou editor de texto de sua preferência

5° Expanda as pasta e vá até o arquivo .env do sistema, existem dois arquivos. O .env e o .env-example abra somente o .env e verifique no DB_CONNECTION MYSQL, o nome do banco bate com o qual foi cria no passo 3, e caso você use sua ferramenta com semha e username, passe esse parametrôs na DB_CONNECTION

EX:

DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=root DB_USERNAME=root DB_PASSWORD=root

Caso sua ferramenta de manipulação de SQL seje do tipo serve e com configuração de senha e username atribuidos na configuração procure todos os parametrôs de execução do mesmo

Como: HOST, CONNECTION, USERNAME e PASSWORD para o acesso do mesmo

6° Após a configuração e execução de todos os passo acima, vamos abrir o sistema no navegador, eu prefiro o Chrome mas abra em quaquer navegador de sua preferência, mas antes de tudo abra o XAMPP, e execute o APACHE e o MYSQL caso o seu MYSQL caso sua ferramenta de manipulção SQL seje do tipo server ao invés de cliente não necessita a execução do MYSQL no xamppp.

7° Após a execução do APACHE e o MYSQL estiver ativos ao navegador, e digitamos a seguinte URL par teste:

LOCALHOST, caso abra a tela de Welcome do XAMPP sua configuração e instalação do mesmo esta correta e vamos proseguir...

digite a seguinte URL: http://localhost/crud_teste/public/usuarios

Após a execução dessa URL a mesma ira abrir o sistema de CRUD ao qual foi clonado.

8° Usufrua e faça os teste do sistema.... :) !!!
