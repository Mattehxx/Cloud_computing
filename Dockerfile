FROM php:8.1-apache
COPY src/ /var/www/html/
COPY ssl/cert.pem /etc/ssl/certs/
EXPOSE 80
EXPOSE 443