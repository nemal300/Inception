#!/bin/bash
sed -i "s/\#port/port /" /etc/mysql/mariadb.conf.d/50-server.cnf
sed -i "s/bind-address/\#bind-address/" /etc/mysql/mariadb.conf.d/50-server.cnf
if [ ! -d /var/lib/mysql/wp ]; then
service mysql start
mysql -u root -e "CREATE DATABASE IF NOT EXISTS $MYSQL_DB"
mysql -u root -e "CREATE USER IF NOT EXISTS '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PSWD'"
mysql -u root -e "GRANT ALL PRIVILEGES ON $MYSQL_DB.* TO '$MYSQL_USER'@'%'"
mysql -u root -e "FLUSH PRIVILEGES"
mysqladmin -u root password $MYSQL_ROOT_PSWD
service mysql stop
else
mkdir /var/run/mysqld
touch /var/run/mysqld/mysqld.pid
mkfifo /var/run/mysqld/mysqld.sock
fi
exec "$@"
