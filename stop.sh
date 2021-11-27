#!/bin/bash

(cd ./apps/awesome/docker ; docker-compose down)
(cd ./apps/best/docker ; docker-compose down)

(cd ./proxy ; docker-compose down)
