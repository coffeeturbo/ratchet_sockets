#!/usr/bin/env bash

sudo cp /vagrant/vagrant_conf/env/* / -R
chmod a+x /usr/bin/vm-*


# Install composer.phar
cd /tmp
sudo curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/bin/
sudo chmod a+x /usr/bin/composer.phar
sudo ln -s /usr/bin/composer.phar /usr/bin/composer

cd /vagrant/project/
sudo composer install & composer update

sudo /etc/init.d/nginx restart
sudo /etc/init.d/php-fpm restart
sudo /etc/init.d/mysql restart
