# Test Back-end

## Instrucciones de uso

Clonar el repositorio entregado, Luego se debe ejecutar el siguiente comando dentro del directorio de este proyecto.

```
composer install
```

Se debe crear una base de datos MySQL con el nombre `db_test`.

El archivo `.env` se debe cambiar `DB_DATABASE` por el nombre de la base de datos, en cuanto a los otros campos pueden ser cambiados en caso de ser requeridos.

Luego de la configuracion de la base de datos, se puede realizar las migraciones con el siguiente comando.

```
php artisan migrate
```

Para poblar las tablas se debe utilizar el siguiente comando.

```
php artisan db:seed --class=DatabaseSeeder
```

Finalmente, puede correr la aplicacion con el siguiente comando.

```
php artisan serve
```

La direccion estara especificada en consola, normalmente es en `http://127.0.0.1:8000`.


## Alejandra Araya
