# Laravel API Boilerplate Dockerized

[![Build Status](https://travis-ci.org/jfernancordova/docker-laravel-api-dev.svg?branch=master)](https://travis-ci.org/jfernancordova/docker-laravel-api-dev)
[![License](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

* API Laravel Boilerplate 5.5
* Apache 2
* MySQL
* Docker

[![Try in PWD](https://cdn.rawgit.com/play-with-docker/stacks/cff22438/assets/images/button.png)](http://play-with-docker.com?stack=https://raw.githubusercontent.com/jfernancordova/docker-laravel-api-dev/master/docker-compose.yml)
 
## Docker Instructions

### Swarm Modes
In the root directory:
<pre><code>docker stack deploy -c docker-compose.yml api-laravel-docker</code></pre>

### Docker Compose
In the root directory:
<pre><code>docker-compose -f docker-compose.yml up --build -d</code></pre>

### Execute Laravel Pre-requisites
In the root directory:
<pre><code>docker container exec dockerlaravelapidev_php_1 composer install && cp.env.example .env && php artisan key:generate && php artisan migrate</code></pre>

### How to fix Error: laravel.log could not be opened?
In the root directory:
<pre><code>chmod -R 775 storage </code></pre>
* 7 - Owner can write
* 7 - Group can write
* 5 - Others cannot write!
Reference:
(https://stackoverflow.com/questions/23411520/how-to-fix-error-laravel-log-could-not-be-opened)

### API Boilerplate Reference
(https://github.com/francescomalatesta/laravel-api-boilerplate-jwt/blob/master/readme.md)
