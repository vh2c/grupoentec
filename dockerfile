
# Use the official PHP image
FROM php:8.2-apache

# Set the working directory
WORKDIR /var/www/html

# Copy the project code into the container
COPY ./app /var/www/html

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Habilita o módulo rewrite do Apache, que é necessário para o .htaccess
RUN sed -i 's/^#\(LoadModule rewrite_module modules\/mod_rewrite.so\)/\1/' /etc/apache2/apache2.conf

# Expose port 80
EXPOSE 80
