#!/bin/bash

DIR="/vendor/"

#Dependencies Install
if [ ! -d "$DIR" ]; then
  sh scripts/build.sh
  sh scripts/start.sh
  docker exec -it check-backend composer install
fi

#Create Environments
docker exec -it check-backend cp .env.example .env

#Laravel Key Generate
docker exec -it check-backend php artisan key:generate

#Create Tables Database
sleep 5
docker exec -it check-backend php artisan migrate:status
sleep 5
docker exec -it check-backend php artisan migrate
sleep 5
docker exec -it check-backend php artisan migrate:status
sleep 5
docker exec -it check-backend php artisan migrate
sleep 5
docker exec -it check-backend php artisan migrate:fresh --seed

#Execute Unit Tests
sh scripts/tests.sh