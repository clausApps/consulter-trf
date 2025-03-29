#!/bin/bash
apt update
apt install -y docker.io docker-compose git unzip
cd /home/ubuntu
git clone https://github.com/seurepositorio/consulter-prect.git consulter
cd consulter
docker-compose up -d --build
