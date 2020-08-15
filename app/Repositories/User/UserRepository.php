<?php

namespace App\Repositories\User;
use Illuminate\Http\Request;

interface UserRepository{
    public function getAll();

    public function getUserById($id);

    public function store_user(Request $request);

    public function delete($user);

    public function update_user(Request $request, $user);
}