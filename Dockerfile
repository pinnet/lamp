FROM php:8.0-apache

COPY ./src   /etc/apache2

COPY postconf.sh /usr/sbin/postconf.sh

COPY ./ssl/ssl.crt/server.crt /etc/ssl/certs/ssl-cert-snakeoil.pem

COPY ./ssl/ssl.key/server.key /etc/ssl/private/ssl-cert-snakeoil.key

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

ENTRYPOINT ["bash","/usr/sbin/postconf.sh"]


