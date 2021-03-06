# OKR app

## Getting started

```console
$ composer install
$ npm install
$ php artisan migrate
```

## Using laradock

1. download docker
- https://docs.docker.com/docker-for-mac/
- https://docs.docker.com/docker-for-windows/

2. clone repo
```
git clone https://github.com/mtmtkj/okr_laravel.git
```

3. clone laradock inside repo
```
cd okr_laravel
git submodule add https://github.com/LaraDock/laradock.git
```

4. run docker-compose in laradock folder
```
cd laradock
docker-compose up -d mysql nginx php-fpm workspace redis
```

5. enter workspace and run composer
``` 
docker-compose exec workspace bash
composer install
```

6. modfiy .env file
```
cp .env.example .env
vi .env
```
```
# DB_HOST=127.0.0.1
DB_HOST=mysql
# REDIS_HOST=127.0.0.1
REDIS_HOST=redis
```

7. run artisan
```
php artisan migrate
```

8. access localhost: http://localhost in browser

9. you're done!

※ warning
if you get the following error:
```
The only supported ciphers are AES-128-CBC and AES-256-CBC with the correct key lengths.
```
try running:
```
php artisan key:generate
php artisan config:clear
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
