<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function register_account(): string
    {
        return view('register_account');
    }
}
