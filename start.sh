#!/bin/bash

(cd ./proxy ; docker-compose up -d)

(cd ./apps/awesome/docker ; docker-compose up -d)
(cd ./apps/best/docker ; docker-compose up -d ; docker-compose exec app composer install)
