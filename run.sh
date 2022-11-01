#!/bin/bash

# Author: Nicolai Blak Walther

# Run docker daemon
docker-compose up -d

# Let docker daemon boot up properly
#SLEEPTIME=21
#sleep $SLEEPTIME

# Migrate Database
php artisan migrate:fresh --seed

# Open default browser on localhost:8000
open http://localhost:8000

# Serve website
php artisan serve
