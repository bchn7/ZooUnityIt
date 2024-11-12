#!/bin/sh
set -e

# Run composer install
composer install --no-interaction --optimize-autoloader

# Run schema update
php bin/console doctrine:schema:update --force

# Start PHP-FPM
php-fpm
