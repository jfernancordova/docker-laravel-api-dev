#!/bin/bash
set -ev
# Make sure starter fixtures can load successfully and all tests pass.
docker exec dockerlaravelapidev_php_1 composer install && cp .env.example .env && php artisan key:generate
docker exec dockerlaravelapidev_php_1 php artisan migrate




