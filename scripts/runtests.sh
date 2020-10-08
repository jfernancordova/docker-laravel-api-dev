#!/bin/bash
set -ev
# Make sure starter fixtures can load successfully and all tests pass.
docker exec php vendor/bin/phpunit




