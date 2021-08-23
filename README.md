# laraveleg\user-online
Define the status of the user that was online or otherwise.

## Install via composer
Add orm to composer.json configuration file.

```bash
$ composer require laraveleg/user-online
```

## add new middleware in `app/Http/Kernel.php` file
```php
\LaravelEG\Laravel\Middleware\UserOnlineMiddleware::class
```

## add the trait in your model User in `app/User.php` file
```php
use LaravelEG\Laravel\Traits\UserOnline;

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