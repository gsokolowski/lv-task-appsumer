# Laravel Appsumer task steps

Step 1

    Start new project in laravel
    laravel new lv-task


Step 2
    Edit config/database.php

    'default' => env('DB_CONNECTION', 'mysql'),


    'mysql' => [
        'driver' => 'mysql',
        'host' => env('DB_HOST', 'localhost'),
        'port' => env('DB_PORT', '3306'),
        'database' => env('DB_DATABASE', 'lv-appsumer'),
        'username' => env('DB_USERNAME', 'root'),
        'password' => env('DB_PASSWORD', 'root'),
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        'strict' => true,
        'engine' => null,
    ],


Step 3
Edit .env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=lv-appsumer
    DB_USERNAME=root
    DB_PASSWORD=root

Step 4
Create db  called lv-appsumer
create database lv-appsumer or use Squel Pro


Step 5
start project

    php artisan serve


Step 6
Install npm to us gulp and elixir

    npm install

    edit gulpfile.js

        elixir(function(mix) {
            mix.sass('app.scss')
                .scripts(['app.js'])
                .version(["css/app.css", "js/all.js"]);
        });

    edit app.scss - add bootstrap to project
    @import "node_modules/bootstrap-sass/assets/stylesheets/bootstrap";

Step 7
crate controller
    NumberController.php

Step 8
    Write action index to hold form and store to dispaly number and save in db

Step 9 Create model Number
Step 10 do migration file to create table to store numbers (this is otional)

php artisan make:migration create_numbers_table --create=numbers
php artisan migrate

Step 11
Elixir gulp css with bootstrap  + js setup versioning
see gulpfile.js

elixir(function(mix) {
    mix.sass('app.scss')
        .scripts(['app.js'])
        .version(["css/app.css", "js/all.js"]);
});

Vaidation has been done on laravel site
        $this->validate($request, [
            'number' => 'required|integer|between:1,100'
        ]);
so javaScript was not needed