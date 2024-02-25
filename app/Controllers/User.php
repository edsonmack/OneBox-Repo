<?php
// Call InsertUser Model Function >>> insert to db
namespace App\Controllers;

class User extends BaseController
{
    public function create_user()
    {
    // Insert data from the POST request
    $firstname = $this->input->post('firstname');
    $lastname = $this->input->post('lastname');
    $email = $this->input->post('email');
    $passwd = $this->input->post('passwd');
    $status = 1;
    $created_date = date('Y-m-d');

    exit(var_dump($status));



    return view('create_account');
    }
}
