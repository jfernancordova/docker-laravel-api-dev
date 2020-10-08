#!/bin/bash
set -ev
# Make sure starter fixtures can load successfully and all tests pass.
docker exec docker-laravel-api-dev_php_1 vendor/bin/phpunit




