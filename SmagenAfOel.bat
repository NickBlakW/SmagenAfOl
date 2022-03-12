@echo off
docker-compose up -d

timeout 8
php artisan migrate:fresh

@echo
php artisan serve