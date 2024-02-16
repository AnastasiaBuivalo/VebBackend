## Проект «Веб-приложение: платформа для онлайн курсов» по предмету Web-программирование
### frontend: HTML, CSS, JS+Vue, 
### backend: PHP, Laravel, MySQL, Postman, Docker.

 ## Войти в папку проекта app
cd app
## Устанавливает все зависимости проекта.
composer install 

## Выполняет сборку образа app
docker-compose build app

## Собрать контейнеры
docker-compose up -d

## Войти в контейнер для управления бэком
docker exec -it web-app bash

  ## Сбросить кэш бэка
  php artisan optimize 

  ## Запустить сидер
  php artisan db:seed --class=UserSeeder

## Выйти из контейнера
exit

## Останавливает все контейнеры проекта.
docker-compose stop


### Запустить клиент
cd frontend


npm run serve

### Войти в adminer
http://localhost/adminer-4.8.0.php
