FROM php:fpm-stretch

# PHP extensions
RUN apt-get update && apt-get install -y mysql-client
RUN docker-php-ext-install pdo_mysql

# Kafka
#RUN apt-get install -y librdkafka-dev
#RUN pecl install rdkafka && docker-php-ext-enable rdkafka

RUN groupadd -g 1001 www
RUN useradd -u 1001 -ms /bin/bash -g www -G www-data www
USER www

# Supervisor
#RUN apt-get install -y supervisor
#ADD docker/application/config/supervisor/supervisord.conf /etc/supervisord.conf
#ENTRYPOINT ["/usr/bin/supervisord", "-n", "-c",  "/etc/supervisord.conf"]
