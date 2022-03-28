# Smagen af Øl

#### Dansk
Dette er et website designet til ølbutikken Smagen af Øl.  
Inkluderet er en docker-compose fil samt dependencies til bl.a. MySQL
og composer.

#### English
This website is developed for the danish beershop Smagen af Øl.  
The project includes a docker-compose.yml file along with dependencies
for MySQL and composer.

## Requirements
- PHP: 8.0+
- Docker
- Composer

## How to run

#### PHP and Laravel
1. Clone the repository locally.
2. Run `composer require "ext-gd:*" --ignore-platform-reqs` to ignore gd-requirement
3. Create copy of env.example file called .env. Use command `cp .env.example .env`
4. Run `php artisan key:generate` to generate random encryption key.
5. Run `php artisan serve` to boot application.

#### Docker + database
In the `.env`-file change the variables as follows.
- host: `127.0.0.1`
- port: `3306`
- username: `root`
- password: `secret`
- database: `beerdb`

Run `docker-compose up -d` to run docker-container  

To insert default values in the database, use command:  
`php artisan migrate:fresh --seed`

Open a browser and go to:  
`localhost:8000`

### Maintainer
NickBlakW


