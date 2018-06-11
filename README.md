# devit-2018-solid
This is a sample project for the purpose of the SOLID workhsop at the DEVit Conference. It's a Laravel application. To set it up, use the following steps.

1. Copy `.env.example` to `.env`
2. Run `php artisan key:generate`
3. Run `composer install`
4. Run `php artisan serve` to start a local server. You can specify a port if needed with `php artisan serve PORT`.  

## Running with docker
1. docker-compose up
2. docker exec -it devit_php bash -c "./project_boot.sh"