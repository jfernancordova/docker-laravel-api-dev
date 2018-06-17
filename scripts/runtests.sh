#!/bin/bash
set -ev
# Make sure starter fixtures can load successfully and all tests pass.
docker exec dockerlaravelapidev_php_1 php artisan key:generate




