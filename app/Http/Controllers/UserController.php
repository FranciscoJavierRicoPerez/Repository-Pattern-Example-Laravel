<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserRepository;
use App\Repositories\User\EloquentUserRepository;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository){
        if(null === $userRepository){
            $this->userRepository = new EloquentUserRepository();
        }
        else{
            $this->userRepository = $userRepository;
        }
    }

    public function index(){
        return view('list_of_users')->with('users', $this->userRepository->getAll());
    }

}
