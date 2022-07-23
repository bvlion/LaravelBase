# Laravel Base

```
cp .env src/.
cd src && docker run --rm --interactive --tty --volume $PWD:/app composer install && cd ..
docker compose up --build -d web db
```

change `b2_web` and all `b2_db`