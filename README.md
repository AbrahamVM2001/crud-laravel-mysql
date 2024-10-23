# Curso de laravel
## CRUD - LARAVEL | MYSQL | BOOTSTRAP

<p>Curso de laravel con un sencillo crud</p>

> [!NOTE]
> Para crear un proyecto con
> <code> composer create-proyect laravel/laravel nombre_proyecto </code>

<p>Para migrar la base de datos</p>

> [!NOTE]
> Para cambiar a mysql
> Editamos el archivo .env y modificamos el
> <code> DB_CONNECTION=mysql
> DB_HOST=127.0.0.1
> DB_PORT=3306
> DB_DATABASE=crud-laravel
> DB_USERNAME=root
> DB_PASSWORD= </code>
> Y posterior cambiamos en la carpeta config cambiamos el database y modificamos el sqlite por mysql. y en consola solo ponemos php artisan migrate

<p>Para crear migraciones</p>

> [!NOTE]
> Para crear una migracion
> <code> php artisan make:migration nombre_tabla </code>

<p>Crear un modelo</p>

> [!NOTE]
> Para crear un modelo usamos
> <code> php artisan make:model Personas -r </code>
> php genera de forma automatica el controlador