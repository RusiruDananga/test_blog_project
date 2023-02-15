<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function storeCache()
    {
        $seconds = 30; //cache will remove after 30 seconds

        $value = Cache::remember('users', $seconds, function () {
            return User::get();
        });
    }

    public function retrieveCache()
    {
        return $value = Cache::pull('users');
    }

    public function storeCachePermenantly()
    {
        Cache::forever('forever', 'Hello');
    }
}
