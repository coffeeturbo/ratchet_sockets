#!/usr/bin/env bash

cd /vagrant/project/
sudo composer install & composer update

php /vagrant/project/src/bin/deamon.php