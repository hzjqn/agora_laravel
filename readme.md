To run the development server you'll need to clone this repo and install composer (https://getcomposer.org). 

Then run:
```composer install```
on the cloned directory.

Once Laravel has been installed you'll need to run some Laravel specific commands:
First we initialize our enviroment. 

```cp .env.example .env```

Note that in the .env file you'll need to indicate the database access information for Laravel to work properly. 
Laravel will need a clean relational SQL database ideally with the "agora_laravel" name. And you may keep root as username and root as password in a non-production and secure workflow enviroment.

Check that the database access is working properly before you continue. 

We're almost there!

Once the .env has been created an properly updated you'll just need to seed the database and start the server.

Seed the database with faker articles and users
```php artisan migrate:fresh --seed```

Then you start the development server provided by laravel on localhost:8000 and thats it.
```php artisan serv```

You may indicate a desired PORT for it to serve running
```php artisan serv --port=PORT```

And you're donzo. Happy hacking.
