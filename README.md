# Laravel Api Rest

[![Build Status](https://travis-ci.org/Tony133/laravel-api-rest.svg?branch=master)](https://travis-ci.org/Tony133/laravel-api-rest)

Test Cars Carsoul of a REST API with Laravel 8.x

## Install with Composer

```
    $ php composer.phar install or composer install
```

## Set Environment

```
    $ cp .env.example .env

```


## Run migrations and seeds

```
   $ php artisan migrate --seed
```

## Endpoints

```
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X GET http://127.0.0.1:8000/api/carshoppings
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X GET http://127.0.0.1:8000/api/carshoppings/:document
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X GET http://127.0.0.1:8000/api/carshoppings/departments/:slug
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X POST -d '{"name":"Carshopping name","document":"11111111111111"}' http://127.0.0.1:8000/api/carshoppings
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X POST -d  http://127.0.0.1:8000/api/carshoppings/:id/departments/add/:id
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X PUT -d '{"name":"Other carshopping name"}' http://127.0.0.1:8000/api/carshoppings/:id
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X DELETE http://127.0.0.1:8000/api/carshoppings/:id

    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X GET http://127.0.0.1:8000/api/departments
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X GET http://127.0.0.1:8000/api/departments/:slug
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X GET http://127.0.0.1:8000/api/departments/carshoppings/:document
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X POST -d '{"name":"Department 1","slug":"D1"}' http://127.0.0.1:8000/api/departments
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X PUT -d '{"name":"Other department name"}' http://127.0.0.1:8000/api/departments/:id
    $ curl -H 'content-type: application/json' -H 'Accept: application/json' -v -X DELETE http://127.0.0.1:8000/api/departments/:id
```