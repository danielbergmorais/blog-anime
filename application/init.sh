#!/bin/bash
#composer install
php artisan key:generate
php artisan storage:link
php artisan migrate
php artisan db:seed
cp .env.example .env
mv database/seeders/noticias storage/app/public/