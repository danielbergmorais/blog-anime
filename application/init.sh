#!/bin/bash
#composer install
cp .env.example .env
php artisan key:generate
php artisan storage:link
php artisan migrate
php artisan db:seed
mv database/seeders/noticias storage/app/public/