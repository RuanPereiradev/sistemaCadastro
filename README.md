<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# sistemaCadastro

Este é um sistema de cadastro desenvolvido com **PHP** e **Laravel**, utilizando **MySQL** como banco de dados. O sistema permite gerenciar o cadastro de alunos de uma academia, realizando operações CRUD (Criar, Ler, Atualizar, Deletar).

## Índice
- [Objetivo](#objetivo)
- [Funcionalidades](#funcionalidades)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Pré-requisitos](#pré-requisitos)
- [Configuração do Projeto](#configuração-do-projeto)
  - [Instalação](#instalação)
  - [Configuração do Banco de Dados](#configuração-do-banco-de-dados)
  - [Execução](#execução)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Exemplos de Uso](#exemplos-de-uso)
- [Contribuições](#contribuições)
- [Licença](#licença)

## Objetivo
Este projeto foi desenvolvido com o objetivo de estudar e praticar conceitos de programação e desenvolvimento web.

## Funcionalidades
- **Cadastro de Alunos**: Armazene informações como nome, idade e tipo de plano.
- **Listagem de Alunos**: Visualize todos os alunos cadastrados no sistema.
- **Edição de Cadastro**: Atualize os dados de um aluno já cadastrado.
- **Exclusão de Cadastro**: Remova registros que não são mais necessários.

## Tecnologias Utilizadas
- **Linguagem Back-end**: PHP (Laravel Framework)
- **Banco de Dados**: MySQL
- **Front-end**: HTML, CSS e JavaScript
- **Gerenciamento de Dependências**: Composer
- **Servidor Local**: XAMPP ou Laravel Artisan

## Pré-requisitos
Certifique-se de que os seguintes itens estão instalados em seu ambiente:
- PHP 8.3 ou superior
- Composer
- MySQL
- Servidor local (Apache ou Nginx)

## Configuração do Projeto

### Instalação
1. Clone o repositório para sua máquina:
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
2. Instale as dependências do projeto:
composer install

3.Renomeie o arquivo .env.example para .env:
cp .env.example .env

## Configuração do Banco de Dados
1. Crie um banco de dados no MySQL:
CREATE DATABASE nome_do_banco;

2. Configure o arquivo .env com os dados do banco de dados:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha

3. Execute as migrações para criar as tabelas:
php artisan migrate

## Execução
1. Inicie o servidor local com o Artisan:
   
php artisan serve
Acesse o sistema pelo navegador em http://localhost:8000.

## Estrutura do Projeto
app/: Lógica principal do Laravel (modelos e controladores).
resources/views/: Views Blade (HTML).
routes/web.php: Rotas do sistema.
database/migrations/: Configurações do banco de dados.
Exemplos de Uso
Cadastro: Adicione informações básicas dos alunos.
Listagem: Consulte todos os alunos registrados.
Edição: Atualize as informações de um aluno.
Exclusão: Remova alunos do sistema.
Licença
Projeto desenvolvido para fins de estudo. Sinta-se à vontade para modificar e reutilizar.


## Como Usar  
Basta copiar e colar esse texto em um arquivo chamado **`README.md`** no diretório raiz do seu projeto. Assim, qualquer desenvolvedor que acessar o repositório entenderá como configurá-lo rapidamente.  

Se ainda precisar simplificar ou detalhar algo, é só avisar! 😊






