<?php

namespace App\Repositories\User;
use Illuminate\Http\Request;

interface UserRepository{
    public function getAll();

    public function store_user(Request $request);
}