<h1 align="center">
    <p>Teste Masterix - Agenda</p>
</h1>

<p align="center">
  <a href="#-tecnologias">Tecnologias</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-funcionamento">Obtendo e executando o projeto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;

</p>

<p align="center">
  <img alt="language count" src="https://img.shields.io/github/languages/count/aldotheapache1/test-masterix">
  <img alt="top language" src="https://img.shields.io/github/languages/top/aldotheapache1/test-masterix">
  <img alt="last commit" src="https://img.shields.io/github/last-commit/aldotheapache1/test-masterix">
</p>

<br>

## 🚀 Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

-   [HTML](https://www.w3schools.com/html/)
-   [CSS](https://www.w3schools.com/css/)
-   [Bootstrap](https://getbootstrap.com/)
-   [PHP](https://www.php.net/)
-   [Laravel](https://laravel.com/)

## 🌐 Funcionamento

```bash
# 1º Instale o Laravel seguindo as instruções no link abaixo:
https://laravel.com/docs/8.x/installation

# 2º Clone o repositório com o comando abaixo:
git clone https://github.com/aldotheapache1/test-masterix.git

# 3º Crie ou modifique o arquivo .env com as informações da sua base de dados.

# 4º Execute o comando abaixo para instalar as dependências.
composer install

# 5º Execute os comandos abaixo para a instalação do Jetstream e livewire.
composer require laravel/jetstream

php artisan jetstream:install livewire

npm install

npm run dev

# 6º Após a conexão do banco de dados estiver estabelecida, execute o comando abaixo, para criar a estrutura no seu banco de dados.
php artisan migrate

# 7º Execute o comando abaixo para popular com alguns exemplos o banco de dados.
php artisan db:seed

# 8º Por fim, execute o comando abaixo e acesse em seu navegador o endereço: http://127.0.0.1:8000
php artisan serve

```
