# DockerFile 
# usamos y configuramos una imagen base para PHP 8.3 con Apache
FROM php:8.3-apache

# Instalamos las extensiones neesarias
RUN apt-get update
RUN apt-get install zip unzip
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql

# Habilitamos las extensiones
RUN docker-php-ext-enable mysqli
RUN docker-php-ext-enable pdo_mysql

# SobreEscribir la configuración y reiniciamos el servicio Apache
RUN a2enmod rewrite

# Configuramos el directorio de trabajo 
WORKDIR /var/www/html

# Expone el puerto 80 para Apache
EXPOSE 80

# Lanza Apache en background
CMD ["apache2-foreground"]
