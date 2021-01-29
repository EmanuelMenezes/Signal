# Signal
Sistema para controle da construção de empreendimentos (Projeto Ficticio)

Ambiente de desenvolvimento: Wampserver 3.2.3 x64, PHP 7.0.33, MySQL 5.7.31

Ao fazer o Download do repositório do projeto, manter a estrutura de pastas da mesma maneira. Faça o download completo do repositório

Para utilizar o sistema:

1) Verificar se as propriedades de PDO e Mysql estão habilitadas no arquivo php.ini;

2) Conexão com a internet, pois existem arquivos linkados por CDN;

3) Realizar a criação do banco de dados por meio do sql disponibilizado na pasta "database":

    No phpMyAdmin, clicar em Importar, Selecionar Arquivo. Escolha o arquivo que se encontra na pasta e clique Executar.

4) Verificar no arquivo "database.php" se as informações de conexão com o banco de dados estão corretas;

. O arquivo "index" se encontra dentro de 'application', portanto a url inicial deve ser algo parecido com:
 "localhost/Signal/application/";


