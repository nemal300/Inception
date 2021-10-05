FROM debian:buster

RUN apt-get -y update	&& apt-get -y install wget php php-zip php-gd php-cli php-fpm php-mysql

EXPOSE 9000
COPY ./conf/ /var/www/
RUN chmod +x /var/www/wpinit.sh
ENTRYPOINT ["/var/www/wpinit.sh"]
CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]
