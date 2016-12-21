#!/usr/bin/env bash

sudo cp /vagrant/vagrant_conf/env/* / -R

sudo /etc/init.d/nginx restart
sudo /etc/init.d/php-fpm restart
sudo /etc/init.d/mysql restart
