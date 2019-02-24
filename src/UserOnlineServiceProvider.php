<?php

namespace Komicho\Laravel;

class UserOnlineServiceProvider extends \Illuminate\Support\ServiceProvider
{
    
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/config.php', 'komichoUserOnline'
        );
    }
    
}