# Laravel API Boilerplate Dockerized

[![Build Status](https://travis-ci.org/jfernancordova/docker-laravel-api-dev.svg?branch=master)](https://travis-ci.org/jfernancordova/docker-laravel-api-dev)
[![Docker Build Status](https://img.shields.io/docker/build/jfernancordova/docker-laravel-api-dev-dockerfile.svg?style=flat-square)](https://hub.docker.com/r/jfernancordova/docker-laravel-api-dev-dockerfile)
[![License](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

* API Laravel Boilerplate 5.5
* Apache 2
* MySQL
* Xdebug
* Docker

You can manage a RestFull API in the fastest, simplest and funniest way! and with open source code dependencies.

However you can contribute for a better performance, the goal is to focus on the code avoiding the configurations and having docker installed.

### Prerequisites

* [Docker](https://docs.docker.com/install/)
* [Docker Compose](https://docs.docker.com/compose/install/)

## Environments

### Dev or Local Mode
* docker-compose-dev.yml: generate automatically folders and require-dev dependencies on your local workspace including Xdebug.
Note: the yaml file has a key called:"XDEBUG_MODE", this yaml by default has the value true (1) to install it.

You can appreciate the dependencies generated automatically on your workspace!

### Play with Docker Mode

[![Play With Docker](https://cdn.rawgit.com/play-with-docker/stacks/cff22438/assets/images/button.png)](http://play-with-docker.com?stack=https://raw.githubusercontent.com/jfernancordova/docker-laravel-api-dev/master/docker-compose-pwd.yml)

* docker-compose-pwd.yml: you can use it to visualize this environment and test it, however you should see the container lists to verify the HEALTHCHECK. 

```bash
# container lists
docker ps
# make sure that the docker dockerlaravelapidev_php_1 or php container is (healthy),
normally the process begins in starting mode (health: starting),
```
### Production Mode
* docker-compose-prod.yml: if you are going to use this yaml, make sure to generate the migrations before!,you can modify the entrypoint to generate them.

## Deployment
 
### Docker Environments

Clone this respository and run the following commands based on your orchestrator;

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
## Running the tests

You have a [Travis](https://travis-ci.org/) Pipeline to apply Continous Integration, and other technology to test this environment.

You can modify the runtests.sh from the [scripts folder](https://raw.githubusercontent.com/jfernancordova/docker-laravel-api-dev/master/scripts/runtests.sh)

Insert jobs, instructions, builds in [this pipeline](https://raw.githubusercontent.com/jfernancordova/docker-laravel-api-dev/master/.travis.yml)

## API Boilerplate Reference
https://github.com/francescomalatesta/laravel-api-boilerplate-jwt/blob/master/readme.md
