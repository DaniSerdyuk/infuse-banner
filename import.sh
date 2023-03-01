#!/bin/sh

docker exec -i mysql mysql -uroot -psecret mysql < .db/banner_db.sql
