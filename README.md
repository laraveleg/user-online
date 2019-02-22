# komicho\laravelUserOnline
Define the status of the user that was online or otherwise.

## Install via composer
Add orm to composer.json configuration file.

```bash
$ composer require komicho/laravel-user-online dev-master
```

## add new middleware in `app/Http/Kernel.php` file
```php
\Komicho\Laravel\Middleware\UserOnlineMiddleware::class
```

## add the trait in your model User in `app/User.php` file
```php
use Komicho\Laravel\Traits\UserOnline;

class User extends Authenticatable
{
    use UserOnline;
    ...
```

## Functions

### isOnline
```php
Auth::user()->isOnline();
```

THX.