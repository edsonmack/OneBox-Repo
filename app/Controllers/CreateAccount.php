<?php

namespace App\Controllers;

class CreateAccount extends BaseController
{
    public function create_account(): string
    {
        return view('create_account');
    }
}
