# Gerenciador de projetos com Laravel 8
Aplicação com REST API desenvolvida em Laravel v8.9.0


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

- Quando iniciar, no seu navegador digite o seguinte endereço:<br>
```
http://localhost:8000/
```
<br>
A aplicação possui duas rotas distintas, uma para a aplicação e outra para API.<br>
A rota destinada a aplicação é ``` http://localhost:8000/ ```, já a rota da API acrecenta-se /api no inicio, exemplo: ``` http://localhost:8000/api/```

Made by Lari Moro
