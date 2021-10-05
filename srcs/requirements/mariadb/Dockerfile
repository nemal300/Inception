FROM debian:buster

RUN apt-get -y update && apt-get -y install mariadb-server

EXPOSE 3306
COPY dbinit.sh /var/www/
RUN chmod +x /var/www/dbinit.sh
ENTRYPOINT ["/var/www/dbinit.sh"]
CMD ["mysqld"]
