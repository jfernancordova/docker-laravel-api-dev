#!/bin/bash
set -ev
# Make sure starter fixtures can load successfully and all tests pass.
docker-compose exec php vendor/bin/phpunit




