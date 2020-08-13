<?php 
namespace App\Repositories\User;

use App\User;

class EloquentUserRepository implements UserRepository{
    
    public function getAll(){
        return User::all();
    }

} 