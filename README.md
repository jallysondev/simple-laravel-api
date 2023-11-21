# Challenge API 

## Stack summary

-   [PHP](https://www.php.net/docs.php)
-   [Laravel](https://laravel.com/)
-   [Pest](https://pestphp.com/docs)
-   [MySQL](https://dev.mysql.com/doc/)

## Endpoints
- GET - /address ->  List All (To filter by name, pass the name parameter with what you want to search for. Ex: /address?name=testing)
- GET - /address/{address} -> Get one by ID
- POST - /address -> Save new address
{
    "name": "",
    "slug": "",
    "city": "",
    "state": ""
}
- PUT - /address/{address} -> Update address
{
    "name": "",
    "slug": "",
    "city": "",
    "state": ""
}
- DELETE - /address/{address} -> Delete address

## Instalation

### Before install application:

1.  Check if your PHP version is equal to or greater than 8.1

### Create a copy of your .env.example file

    cp .env.example .env

### After above step install project dependencies:

    composer install

### After the above step, up the migrations.:

    php artisar migrate

### Finally, to ensure that there will be no problem with the key, the application executes the command to recreate it:

    php artisan key:generate

### Now, run server:

    php artisan serve

Generally, the application is started in [http://localhost:8000](http://localhost:8000) (check terminal info)

### To run the tests use:

    ./vendor/bin/pest

### For more information access:

## https://laravel.com/


