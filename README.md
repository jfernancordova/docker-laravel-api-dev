# Laravel API Boilerplate Dockerized

[![Build Status](https://travis-ci.org/jfernancordova/docker-laravel-api-dev.svg?branch=master)](https://travis-ci.org/jfernancordova/docker-laravel-api-dev)
[![License](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

* API Laravel Boilerplate 5.5
* Apache 2
* MySQL
* Docker
 
## Docker Environments

### Swarm Mode
Clone this respository and run the following commands:
```bash
cd docker-laravel-api-dev/
# Creating mount folder
mkdir .docker/local-mysql-datadir
docker stack deploy -c docker-compose.yml docker-laravel-api-dev
# wait for it and follow the docker instructions!...
```
### Docker Compose
Clone this respository and run the following commands:
```bash
cd docker-laravel-api-dev/
docker-compose -f docker-compose.yml up --build -d
# wait for it to build and follow the docker instructions!...
```
### PWD 
With Play with Docker and following the docker instructions, it is easy to deploy and test this environment!

[![Try in PWD](https://cdn.rawgit.com/play-with-docker/stacks/cff22438/assets/images/button.png)](http://play-with-docker.com?stack=https://raw.githubusercontent.com/jfernancordova/docker-laravel-api-dev/master/docker-compose-pwd.yml)

## Docker Instructions

### Execute Laravel Pre-requisites
In the root directory:
```bash
# container lists
docker ps
# next, execute an interactive bash shell on the php container.
docker container exec -t -i [dockerlaravelapidev_php_1 or container Id] bash
```
#### Run the following commands:

##### Compose and Swarm Mode
```bash
composer install && cp .env.example .env && php artisan key:generate && php artisan migrate
chmod 755 -R storage
# forward to the port 80, go to localhost and enjoy!...
```
##### Play With Docker (PWD)
```bash
composer install && php artisan migrate
# forward to the port 80, go to localhost and enjoy!...
```

### How to fix Error: laravel.log could not be opened?
In the root directory or inside the container php:
<pre><code>chmod -R 775 storage </code></pre>
* 7 - Owner can write
* 7 - Group can write
* 5 - Others cannot write!
Reference:
https://stackoverflow.com/questions/23411520/how-to-fix-error-laravel-log-could-not-be-opened

### API Boilerplate Reference
https://github.com/francescomalatesta/laravel-api-boilerplate-jwt/blob/master/readme.md
