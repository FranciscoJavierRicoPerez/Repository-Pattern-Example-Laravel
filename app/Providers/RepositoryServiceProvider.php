<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvier;
use Carbon\Laravel\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider{
    
    public function register(){
        $this->app->bind(
            'App\Repositories\User\UserRepository',
            'App\Repositories\User\EloquentUserRepository'
        );
    }

}