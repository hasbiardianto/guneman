<?php

namespace App\Providers;

use Luilliarcec\LaravelUsernameGenerator\Facades\Username;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Username::withTrashed()
        //     ->setDriver('name') // By default 'name' is used so you can omit this if you like.
        //     ->setCase('lower') // By default 'lower' is used so you can omit this if you like.
        //     ->setModel(User::class) // By default 'App\Models\User' is used so you can omit this if you like.
        //     ->setColum('username'); // By default 'username' is used so you can omit this if you like.
            
        // If you want to use the defaults, it would look like this.
        
        // Username::withTrashed()
        //     // If you are using another namespace for your User model, set it here.
        //     ->setModel('App\Models\User');
    }
}