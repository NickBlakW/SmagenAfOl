@echo off
docker-compose up -d

php artisan migrate:fresh

@echo
php artisan serve