<?php

namespace LaravelEG\Laravel;

class UserOnlineServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/config.php',
            'laravelegUserOnline'
        );
    }
}
