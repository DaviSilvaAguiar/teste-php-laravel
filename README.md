My First Test Project with PHP + Laravel
This is my first test project developed using PHP and the Laravel framework. The goal of this project is to put into practice the knowledge I've gained about web development with PHP and Laravel by creating a functional application that includes basic CRUD (Create, Read, Update, Delete) operations for managing contacts.

Features
The application offers the following functionalities:

User Registration: Create a new user with email and password validation.
User Login: Authenticate registered users to access protected features.
Contact Management: Users can create, list, edit, view, and delete contacts.
Each contact has a name, phone number, and email address.
Technologies Used
PHP 8.1
Laravel 10: PHP framework for web application development.
Blade: Laravel's template engine used to render HTML pages.
MySQL: Relational database used to store contact and user data.
CSS: Basic styling to enhance the user interface.
Installation
Follow the steps below to install and run the project locally:

1. Clone the repository
First, clone the repository to your computer:

git clone https://github.com/DaviSilvaAguiar/teste-php-laravel.git
2. Install dependencies
Navigate to the project directory and install the Composer dependencies:

cd your-repository
composer install
3. Configure the environment
Rename the .env.example file to .env and configure the environment variables as needed, especially the database configuration:

cp .env.example .env
Open the .env file and configure the database credentials:

env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
4. Generate the application key
Generate the Laravel application key:

php artisan key:generate
5. Run migrations
Run the migrations to create the necessary tables in the database:

php artisan migrate
6. Serve the project
Start the built-in Laravel development server:

php artisan serve
Now, you can access the application in your browser at: http://localhost:8000.

Project Structure
app/Http/Controllers: Contains the controllers for the application (User registration, contact management).
resources/views: Contains the views (Blade templates) for each page of the application.
routes/web.php: The routes file where the application's URLs are defined and associated with controllers.
database/migrations: Contains migrations to create the necessary tables in the database.
Contributing
This project is in its early stages and is being developed as a way to test and learn more about web development with PHP and Laravel.

If you find any issues or have suggestions for improvements, feel free to contribute by opening an issue or a pull request.

License
This project is licensed under the MIT License. See the LICENSE file for more details.





Meu Primeiro Projeto Teste com PHP + Laravel
Este é meu primeiro projeto teste desenvolvido utilizando PHP e o framework Laravel. O objetivo deste projeto é colocar em prática meus conhecimentos adquiridos sobre desenvolvimento web com PHP e Laravel, criando uma aplicação funcional com as principais operações de CRUD (Create, Read, Update, Delete) para gerenciamento de contatos.

Funcionalidades
A aplicação oferece as seguintes funcionalidades:

Cadastro de Usuário: Criação de um novo usuário com validações de e-mail e senha.
Login de Usuário: Autenticação de usuários registrados para acesso às funcionalidades protegidas.
Gerenciamento de Contatos: O usuário pode criar, listar, editar, visualizar e excluir contatos.
Cada contato possui nome, telefone e e-mail.
Tecnologias Utilizadas
PHP 8.1
Laravel 10: Framework PHP para desenvolvimento de aplicações web.
Blade: Motor de templates do Laravel para renderizar as páginas HTML.
MySQL: Banco de dados relacional utilizado para armazenar os dados dos contatos e usuários.
CSS: Estilo básico para deixar a interface mais amigável.
Instalação
Siga as etapas abaixo para instalar e rodar o projeto localmente:

1. Clonar o repositório
Primeiro, clone o repositório em seu computador:

git clone https://github.com/DaviSilvaAguiar/teste-php-laravel.git
2. Instalar as dependências
Navegue até o diretório do projeto e instale as dependências do Composer:

cd seu-repositorio
composer install
3. Configurar o ambiente
Renomeie o arquivo .env.example para .env e configure as variáveis de ambiente conforme necessário, principalmente as configurações do banco de dados:

cp .env.example .env
Abra o arquivo .env e configure as credenciais do banco de dados:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
4. Gerar a chave de aplicação
Gere a chave de aplicativo Laravel:

php artisan key:generate
5. Rodar as migrações
Execute as migrações para criar as tabelas no banco de dados:

php artisan migrate
6. Servir o projeto
Inicie o servidor de desenvolvimento integrado do Laravel:

php artisan serve
Agora, você pode acessar a aplicação no seu navegador em: http://localhost:8000.

Estrutura do Projeto
app/Http/Controllers: Contém os controladores da aplicação (Cadastro de usuários, gerenciamento de contatos).
resources/views: Contém as views (templates Blade) para cada uma das páginas da aplicação.
routes/web.php: Arquivo de rotas onde as URLs da aplicação são definidas e associadas aos controladores.
database/migrations: Contém as migrações para criação das tabelas no banco de dados.
Contribuindo
Este projeto está em seu estágio inicial e está sendo desenvolvido como uma maneira de testar e aprender mais sobre o desenvolvimento de aplicações web com PHP e Laravel.

Se você encontrar algum problema ou tiver sugestões de melhorias, sinta-se à vontade para contribuir abrindo uma issue ou um pull request.

Licença
Este projeto está sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.
