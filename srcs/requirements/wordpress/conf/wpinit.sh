#!/bin/bash
	sed -i "s/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/" "/etc/php/7.3/fpm/pool.d/www.conf"
	mkdir -p /run/php/
	touch /run/php/php7.3-fpm.pid
	chmod -R 755 /var/www/*
	chown -R www-data:www-data /var/www/*
	mkdir -p /var/www/html/
if [ ! -f /var/www/html/wp-config.php ]; then
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
	chmod +x wp-cli.phar
	mv wp-cli.phar /usr/local/bin/wp
	cd var/www/html/
	wp core download --allow-root
	mv /var/www/wp-config.php /var/www/html/
	wp core install --allow-root \
		--url=${WP_DOMEN} \
		--title=${WP_TITLE} \
		--admin_user=${WP_ADM_USER} \
		--admin_password=${WP_ADM_PSWD} \
		--admin_email=${WP_ADM_EMAIL}
	wp user create --allow-root notkbulwer notkbulwer@42.fr --user_pass=notkbulwer
fi
exec "$@"	