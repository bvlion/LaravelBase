# Laravel Base

```
cp .env src/.
cd src && docker run --rm --interactive --tty --volume $PWD:/app composer install && cd ..
docker compose up --build -d web db
```

change `b2_web` , `LaravelBase` and all `b2_db`


### note

cache clear

```
docker compose exec -T web php artisan cache:clear
docker compose exec -T web php artisan config:clear
docker compose exec -T web php artisan config:cache
docker compose exec -T web php artisan route:clear
docker compose exec -T web php artisan view:clear
docker compose exec -T web php artisan clear-compiled
docker compose exec -T web php artisan optimize
cd src
docker run --rm --interactive --tty --volume $PWD:/app composer dump-autoload
rm -f bootstrap/cache/config.php
cd ..
```