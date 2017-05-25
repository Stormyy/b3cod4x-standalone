# B3COD4x-standalone
Standalone version of the b3cod4x library

To install follow the following steps
1. Run 
```bash
composer create-project stormyy/b3cod4x-standalone
```
2. Fill in the database information and the APP_URL, APP_NAME in .env in the root. Also 
3. Run migrate to install database 
```bash
php artisan migrate
```

Now you should be good to go! Superadmin is:    

Username: admin@admin.com   
Password: ChangeMeFast

Add you b3 server via the panel and you can use it straight away ;)


## Nofifications
To turn on notifications you have to add the following settings

1. Create a account on http://www.pusher.com (Free sandbox one)
2. Run
```bash
composer require pusher/pusher-php-server
```
3. In .env set BROADCAST_DRIVER to pusher ALSO fill in the PUSHER variables in the buttom of the .env you can find these values @ the pusher website
4. Enjoy :)