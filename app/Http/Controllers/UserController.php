<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserRepository;
use App\Repositories\User\EloquentUserRepository;
use App\User;
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

    public function create(){
        return view('create_user');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|max:4|min:4'
        ]);
        $this->userRepository->store_user($request);
        return redirect('/')->with('users', $this->userRepository->getAll());
    }
}
