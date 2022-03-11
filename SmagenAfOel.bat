@echo off
cd C:\Users\nicol\PhpstormProjects\SmagenAfOl

docker-compose up -d

php artisan migrate:fresh

@echo
php artisan serve