<?php

namespace LaravelEG\Laravel\Traits;

use Illuminate\Support\Facades\Cache;

trait UserOnline
{
    public function isOnline()
    {
        if (Cache::has('userIsOnline-'.$this->id)) {
            return true;
        }

        return false;
    }
}
