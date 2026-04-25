FROM dunglas/frankenphp:php8.4

WORKDIR /app

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN apt-get update && apt-get install -y \
    git unzip curl nodejs npm \
    && rm -rf /var/lib/apt/lists/*

RUN composer install --no-dev --optimize-autoloader

RUN npm install && npm run build

RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear

RUN chmod -R 775 storage bootstrap/cache

ENV SERVER_NAME=:8080
ENV APP_ENV=production
ENV APP_DEBUG=false

EXPOSE 8080

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]