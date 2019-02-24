<?php

namespace Komicho\Laravel\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

trait UserOnline
{
    public function isOnline()
    {
        if (Auth::id() == $this->id) {
            return false;
        }

        if (Cache::has('userIsOnline-'.$this->id)) {
            return true;
        }
        
        return false;
    }
}