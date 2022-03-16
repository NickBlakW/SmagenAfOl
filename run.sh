#!/bin/bash

# Author: Nicolai Blak Walther

# Run docker daemon
docker-compose up -d

# Let docker daemon boot up properly
sleep 8s

# Migrate Database
php artisan migrate:fresh

# Serve website
php artisan serve