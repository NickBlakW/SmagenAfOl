rem 	AUTHOR: Nicolai Blak Walther

@echo off
rem 	Run the docker daemon;
docker-compose up -d

rem 	Allow docker daemon to initialize properly;
timeout 8

rem 	Init tables in Database
php artisan migrate:fresh --seed

rem		Open browser to localhost
start "" http://localhost:8000

rem		Start the server and listen on port 8000;
@echo
php artisan serve
