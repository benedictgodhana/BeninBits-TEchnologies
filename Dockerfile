# Set working directory
WORKDIR /var/www/html

# Copy Laravel code to container
COPY . /var/www/html

# Set Apache to use Laravel's public/ as the web root
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf \
 && sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s|AllowOverride None|AllowOverride All|' /etc/apache2/apache2.conf

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set up Laravel
RUN cp .env.example .env && \
    composer install --no-dev --optimize-autoloader && \
    php artisan key:generate && \
    php artisan config:cache

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache
