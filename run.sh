#!/bin/bash

# Author: Nicolai Blak Walther

# Run docker daemon
docker-compose up -d

# Let docker daemon boot up properly
SLEEPTIME=21
sleep $SLEEPTIME

# Migrate Database
php artisan migrate:fresh

# Serve website
php artisan serve