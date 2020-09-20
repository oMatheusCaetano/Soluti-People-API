<hr>
<h1 align=center>SOLUTI PEOPLE API</h1>
<hr>

## Sobre Soluti People API
Soluti People é uma API desenvolvida com [LUMEN](https://lumen.laravel.com/).
Esta aplicação realiza o gerenciamento dos clientes Soluti.

## Documentação
[Acessar documentação da API](https://app.swaggerhub.com/apis-docs/devmatheuscaetano/SolutiPeople/1.0.0#/)


## Front-Ent
[Acessar o front-end](https://github.com/CaetanoMatheus/Soluti-People).

## Executando com  Docker
-- Em breve --

## Executando sem Docker
### Requisitos
Para executar esta aplicação em uma máquina sem o docker, será preciso que a máquina atenda aos requisitos abaixo.

- [PHP](https://www.php.net/) 7.1 ou Superior
- [Composer](https://getcomposer.org/)

### Baixando dependências
Na pasta raiz do projeto, execute o comando abaixo. Este irá baixar todas as dependências do projeto.
```sh
composer install
```

### Arquivo .env
Algumas variáveis de ambiente necessárias para o funcionamento da aplicação deverão estar em um arquivo chamado ```.env``` que deverá estar na pasta raiz do projeto.
Existe um arquivo ```.env.example``` que pode ser renomeado para atender a este requisito.

### Configuração do Banco de dados
Esta aplicação utilizará por padrão um banco de dados [Mysql](https://www.mysql.com/).
No arquivo ``` .env ``` alguns dados deverão ser configurados para que a aplicação consiga acessar o banco de dados corretamente.
```sh
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
Na variável ``` DB_DATABASE ```, o nome do banco de dados deverá ser informado. É importante que este banco tenha sido previamente criado. Por padrão ele tentará o banco de dados **soluti_people**.
Na variável ``` DB_USERNAME ```, o nome do usuário de acesso ao mysql deverá ser informado. Por padrão ele tentará acessar o usuário **root**.
Na variável ``` DB_PASSWORD ```, a senha de acesso ao mysql deverá ser informada. Por padrão ele tentará logar coma senha **secret**.

### Criando as tabelas no banco de dados.
Após realizar as configurações de acesso ao banco no arquivo ``` .env ```, será preciso criar as tabelas que a aplicação precisa para funcionar.
Esta parte será feita inteiramente pelo [Eloquent](https://laravel.com/docs/5.0/eloquent) com o comando:
```sh
php artisan migrate
```

### Criando as tabelas no banco de dados (Opcional).
O projeto possui algumas **seeds** que podem ser utilizada para popular o banco de dados, caso queira utilizá-las basta executar o comando:
```sh
php artisan db:seed
```

### Gerando uma chave(secret) para autenticação
Esta aplicação utiliza o pacote [tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth) para realizar a autenticação com tokens JWT.
Para que funcione corretamente será preciso gerar uma secret que será armazenada no arquivo .env. Para isso execute o comando:
```sh
php artisan jwt:secret
```

### Acessando a Aplicação
Por padão a aplicação pode ser acessada em:
```sh
http://localhost:8080/
```
