1.Предварительно убедиться что в системе установлен omposer,docker и git.

2.Выполнить команду clone  git@github.com:Oleg1979k/TestShop.git
Проект загрузится из репозитория

3.Выполнить  composer install.
Подтянутся все необходимые модули.

4.Создать файл .env.Настройки БД
DB_CONNECTION=mysql
DB_HOST=172.18.0.2
DB_PORT=3306
DB_DATABASE=laravel_crud_api
DB_USERNAME=sail
DB_PASSWORD=password

5.Для построения контейнеров докера выполнить ./vendor/bin/sail up -d

6.Накатить миграции ./vendor/bin/sail artisan migrate

Команды RestAPI(используется Postman

1.Регистрация пользователя

POST http://localhost/api/register
{
    "name" :"Ivan",
    "email":"ivan@mail.ug",
    "password":"123456pp",
    "password_confirmation":"123456pp"
}

2.Авторизация пользователя
POST http://localhost/api/login
{
     "email":"ivan@mail.ug",
    "password":"123456pp"
}
В ответ на эту команду придет token.Он необходим для авторизации пользователя.
Все POST-запросы в данном приложении, кроме регистрации и авторизации, требуют авторизации по Bearer

3.Просмотр ассортимента
GET http://localhost/api/products

4.Оформление заказа
POST http://localhost/api/orders
{
  "items": [
    { "product_id": 2, "qty": 2 },
    { "product_id": 3, "qty": 3 }
  ]
}
5.Получение списка заказов пользователя
GET http://localhost/api/users/1/orders
(Вместо 1 указывается id пользователя

6.POST http://localhost/api/categories
{
    "name":"Наименование категории  товара"


}
Категория товара необходима для создания товара
7.POST http://localhost/api/products
{
    "name":"Очень модные ботинки",
    "price":100.57,
    "is_active":true,
    "category_id":1

}


