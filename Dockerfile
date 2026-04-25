FROM richarvey/nginx-php-fpm:latest

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN npm install && npm run build

RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear

ENV WEBROOT=/var/www/html/public