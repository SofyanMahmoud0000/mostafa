./composer.phar install
php artisan key:generate
php artisan cache:clear
php artisan config:clear
php artisan jwt:secret -n
php artisan migrate --force
php artisan scribe:generate
php artisan serve --host=0.0.0.0