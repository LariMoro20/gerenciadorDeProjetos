# Gerenciador de projetos PHP com Laravel 8
Aplicação com REST API desenvolvida em Laravel Framework PHP

O projeto, com foco backend, foi elaborado seguindo a seguinte instrução:

## User Story

Como responsável por uma empresa de gerenciamento de projetos eu gostaria de controlar de forma simples todos os projetos da companhia. Os projetos terão um número ilimitado de empregados associados a eles, sendo que um empregado pode ser Gerente ou Funcionário. Cada gerente tem alguns funcionários. Os dados básicos dos projetos são descrição e deadline (Data Inicio e Fim).
Crie um projeto de Api usando a última versão disponível do Laravel (https://laravel.com/docs), a resposta dos Controllers deve ser um JSON, cria as Rotas, Models, Requests e Resources ou Services necessários para criar empregados e projetos e listar os projetos existentes.
================================================================================
Como não há muitas especificações, foi feito um modelo que segue:

## Instalação
 Comandos iniciais (executar via terminal no diretório do projeto)<br>

- Clonar o projeto para seu computador<br>```
git clone https://github.com/LariMoro20/gerenciadorDeProjetos ```<br>
- Abrir pasta do projeto<br>
``` cd gerenciadorDeProjetos ```

## Como começar

- Crie uma base de dados e altere as informações no arquivo .env localizado na raiz do projeto

**Exemplo:**<br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1   // IP/URL do banco (localhost)
DB_PORT=3306        // Porta
DB_DATABASE=appapi  // Nome do banco
DB_USERNAME=root    // Usuário
DB_PASSWORD=root    // Senha
```
- Após, para iniciar a aplicação, na pasta do projeto execute:<br>
```
composer install
php artisan key:generate
php artisan migrate
php artisan serve
```
- Para popular a base de dados com as informações teste: (executar via terminal no diretório do projeto)<br>
<small>ATENÇÃO: Esse comando deleta todos os dados e tabelas e refaz o banco com as informações contidas no arquivo ```database/seeds/DatabaseSeeder.php```</small><br><br>
```php artisan migrate:fresh --seed```<br><br>

## Rotas da aplicação/API
- Quando iniciar, no seu navegador digite o seguinte endereço:<br>
```
http://localhost:8000/
```
- A aplicação possui duas rotas distintas, uma para a aplicação e outra para API.<br>
A rota destinada a aplicação (o foco é backend, o front é apenas para visualização) é <br>
``` 
http://localhost:8000/ 
```

- Já a rota da API acrecenta-se /api no inicio, exemplo: <br>
``` 
http://localhost:8000/api/ 
```

- Rota API <br>
Para a visualizar todos os usuarios/funcionarios ou os projetos, acesse as urls abaixo:<br>
``` 
http://localhost:8000/api/users/
http://localhost:8000/api/projetos/
```

Para a visualizar um  usuarios ou projeto, acesse as urls abaixo alterando para o id desejado:<br>
``` 
http://localhost:8000/api/users/show/1
http://localhost:8000/api/projetos/show/1
```

Para a adicionar um  usuario ou projeto, envie um PUT para a seguinte URL:<br>
``` 
http://localhost:8000/api/users/
http://localhost:8000/api/projetos/
```

Para a remover um  usuario ou projeto, envie um DELETE para a seguinte URL alterando para o id desejado:<br>
``` 
http://localhost:8000/api/users/1
http://localhost:8000/api/projetos/1
```

Made by Lari Moro
