# Laravel API Boilerplate Dockerized

[![Build Status](https://travis-ci.org/jfernancordova/docker-laravel-api-dev.svg?branch=master)](https://travis-ci.org/jfernancordova/docker-laravel-api-dev)
[![License](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

* API Laravel Boilerplate 5.5
* Apache 2
* MySQL
* Xdebug
* Docker

### Environments

* docker-compose-dev.yml: generate automatically folders and require-dev dependencies on your local workspace including Xdebug, however the yaml file has a key called:
"XDEBUG_MODE", this yaml by default has the value true (1) to install it.

* docker-compose-pwd.yml: you can use it in [![Play With Docker](https://cdn.rawgit.com/play-with-docker/stacks/cff22438/assets/images/button.png)](http://play-with-docker.com?stack=https://raw.githubusercontent.com/jfernancordova/docker-laravel-api-dev/feature/refactoring/docker-compose-pwd.yml), to visualize this environment and test it, however you should see the container lists to verify the HEALTHCHECK. 

```bash
# container lists
docker ps
# make sure that the docker dockerlaravelapidev_php_1 or php container is (healthy),
normally the process begins in starting mode (health: starting),
```

* docker-compose-prod.yml: if you are going to use this yaml, make sure to generate the migrations before!, however you can modify the entrypoint to generate them.

## Docker Environments

### Swarm Mode
Clone this respository and run the following commands:
```bash
cd docker-laravel-api-dev/
docker stack deploy -c docker-compose-dev.yml docker-laravel-api-dev
# wait for the HEALTHCHECK in healthy mode
```

### Docker Compose
Clone this respository and run the following commands:
```bash
cd docker-laravel-api-dev/
docker-compose -f docker-compose-dev.yml up --build -d 
or to see the logs 
docker-compose -f docker-compose-dev.yml up 
# wait for the HEALTHCHECK in healthy mode
```

### API Boilerplate Reference
https://github.com/francescomalatesta/laravel-api-boilerplate-jwt/blob/master/readme.md
