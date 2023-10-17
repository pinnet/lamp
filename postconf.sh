#!/bin/bash
apt update
apt install brotli -y 

/usr/sbin/a2enmod headers
/usr/sbin/a2enmod ssl
/usr/sbin/a2enmod brotli 
/usr/sbin/a2enmod mime
/usr/sbin/a2ensite default-ssl

apache2-foreground
