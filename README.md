# Laravel API Boilerplate Dockerized

[![Build Status](https://travis-ci.org/jfernancordova/docker-laravel-api-dev.svg?branch=master)](https://travis-ci.org/jfernancordova/docker-laravel-api-dev)
[![License](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

* API Laravel Boilerplate 5.5
* Apache 2
* MySQL
* Xdebug
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
# wait for it to build!...
```
### PWD 
With Play with Docker and following the docker instructions, it is easy to deploy and test this environment!

[![Try in PWD](https://cdn.rawgit.com/play-with-docker/stacks/cff22438/assets/images/button.png)](http://play-with-docker.com?stack=https://raw.githubusercontent.com/jfernancordova/docker-laravel-api-dev/feature/refactoring/docker-compose-pwd.yml)

## Docker Instructions

In the root directory:
```bash
# container lists
docker ps
# make sure that the docker dockerlaravelapidev_php_1 or php container is (healthy),
normally the process begins in starting mode (2 or 3 minutes)
```

### Environments

* docker-compose-dev.yml: generate automatically severals folders and require-dev dependencies on your local. (Including Xdebug).

* docker-compose-pwd.yml: you can use it in play with docker and test its process.

* docker-compose-prod.yml: if you are going to use this yaml, make sure to generate the migrations before, however you can modify the entrypoint.


### API Boilerplate Reference
https://github.com/francescomalatesta/laravel-api-boilerplate-jwt/blob/master/readme.md
