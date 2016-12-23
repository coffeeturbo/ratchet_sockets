#!/usr/bin/env bash


## PHP-FPM
sudo eselect php set cli 2
sudo eselect php set fpm 2
sudo cp /vagrant/vagrant_conf/env/etc/php/fpm-php7.0/php.ini /etc/php/fpm-php7.0/php.ini
sudo cp /vagrant/vagrant_conf/env/etc/php/fpm-php7.0/php-fpm.conf /etc/php/fpm-php7.0/php-fpm.conf
sudo rc-update add php-fpm default
sudo /etc/init.d/php-fpm restart

## NGINX
sudo cp /vagrant/vagrant_conf/env/etc/nginx/vhosts/* /etc/nginx/vhosts/
sudo rc-update add nginx default
sudo emerge nginx
sudo /etc/init.d/nginx restart


## MYSQL
#emerge mysql
sudo /etc/init.d/mysql restart
mysqladmin -u root password 'truemysql'
#mysql -uroot -p"truemysql"
## NPM
#sudo emerge nodejs


# COMPOSER
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/bin/
chmod a+x /usr/bin/composer.phar
ln -s /usr/bin/composer.phar /usr/bin/composer


## GIT
sudo emerge dev-vcs/git

#SYMFONY
#cd /vagrant/
#composer create-project symfony/framework-standard-edition project "3.0.*"

cp -R /vagrant/vagrant_conf/env/usr/bin/vm-* /usr/bin/
