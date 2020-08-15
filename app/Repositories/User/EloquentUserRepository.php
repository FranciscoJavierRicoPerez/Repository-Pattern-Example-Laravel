<?php 
namespace App\Repositories\User;

use App\User;
use Illuminate\Http\Request;

class EloquentUserRepository implements UserRepository{
    
    public function getAll(){
        return User::all();
    }

    public function store_user(Request $request){
        $user = new User();
        $user->setName($request->name);
        $user->setEmail($request->email);
        $user->setPassword($request->password);
        $user->save();
    }

} 