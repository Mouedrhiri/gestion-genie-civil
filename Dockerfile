# Utiliser une image de base PHP avec Apache
FROM php:8.2-apache

# Installer des extensions PHP requises
RUN docker-php-ext-install pdo pdo_mysql

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Installer Node.js et npm
RUN apt-get update && apt-get install -y curl && \
    curl -sL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs

# Définir le répertoire de travail pour Laravel
WORKDIR /var/www/laravel

# Copier les fichiers de l'application Laravel
COPY . /var/www/laravel

# Installer les dépendances PHP avec Composer
RUN composer install --no-interaction --prefer-dist

# Installer les dépendances Node.js
COPY ./server/package*.json /var/www/server/
WORKDIR /var/www/server
RUN npm install

# Configurer les permissions
RUN chown -R www-data:www-data /var/www/laravel/storage /var/www/laravel/bootstrap/cache

# Exposer le port 80
EXPOSE 80
