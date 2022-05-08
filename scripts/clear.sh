#!/bin/bash

echo -e "Attention! This action clear ALL Images, Volumes and other instances.\n"
echo -e "Are you sure you want to continue (y/n)?\n"
read answer

if [ "$answer" != "${answer#[Yy]}" ] ;then
    docker rmi $(docker images -f dangling=true -q)
    docker rmi $(docker images -a -q)
    docker rmi $(docker images -q) -f
    docker rm $(docker ps -a -f status=exited -q)
    docker stop $(docker ps -a -q)
    docker rm $(docker ps -a -q)
    docker volume rm $(docker volume ls -f dangling=true -q)
    docker system prune -f

    sudo rm -rf mysql/
    sudo rm -rf backend/vendor/
else
    exit
fi