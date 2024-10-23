# Curso de laravel
## CRUD - LARAVEL | MYSQL | BOOTSTRAP

<p>Curso de laravel con un sencillo crud</p>

> [!NOTE]
> Para crear un proyecto con
> composer create-proyect laravel/laravel nombre_proyecto

<p>Para migrar la base de datos</p>

> [!NOTE]
> Para cambiar a mysql
> Editamos el archivo .env y modificamos el
> DB_CONNECTION=mysql
> DB_HOST=127.0.0.1
> DB_PORT=3306
> DB_DATABASE=crud-laravel
> DB_USERNAME=root
> DB_PASSWORD=
> Y posterior cambiamos en la carpeta config cambiamos el database y modificamos el sqlite por mysql. y en consola solo ponemos php artisan migrate

<p>Para crear migraciones</p>

> [!NOTE]
> Para crear una migracion
> php artisan make:migration nombre_tabla

<p>Crear un modelo</p>

> [!NOTE]
> Para crear un modelo usamos
> php artisan make:model Personas -r
> php genera de forma automatica el controlador