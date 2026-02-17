# WNews

Небольшой новостной сайт на Laravel 8 с Bootstrap-интерфейсом:
- список новостей;
- просмотр отдельной новости;
- создание/редактирование/удаление;
- WYSIWYG-редактор в форме создания.

<hr>

## <u>Требования</u>

- PHP `^7.3 | ^8.0`
- Composer
- MySQL / MariaDB
- Node.js + npm

<hr>

## <u>1. Установка зависимостей</u>

```bash
composer install
npm install
```

<hr>

## <u>2. Настройка окружения</u>

```bash
cp .env.example .env
php artisan key:generate
```

Открой `.env` и обязательно укажи настройки БД:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wnews
DB_USERNAME=root
DB_PASSWORD=
```

<strong>Важно:</strong> база `wnews` должна существовать заранее.

<hr>

## <u>3. Миграции</u>

```bash
php artisan migrate
```

<hr>

## <u>4. Сборка фронта</u>

```bash
npm run dev
```

Для постоянной пересборки в разработке:

```bash
npm run watch
```

<hr>

## <u>5. Запуск проекта</u>

```bash
php artisan serve
```

После запуска сайт будет доступен по адресу:

`http://127.0.0.1:8000`

<hr>

## <u>Основные страницы</u>

- Главная / все новости: `GET /` и `GET /news`
- Одна новость: `GET /news/{news}`
- Создание новости: `GET /news/create`
- Редактирование новости: `GET /news/{news}/edit`

<hr>

## <u>Полезно знать</u>

- Favicon лежит в `public/favicon.ico` (и логотип использует `public/favicon.jpeg`).
- Уведомления об успехе показываются через Bootstrap Toast.
- WYSIWYG на форме создания подключен через CDN (CKEditor 5).

<hr>

## <u>Если что-то не работает</u>

```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

И затем снова:

```bash
npm run dev
php artisan serve
```
