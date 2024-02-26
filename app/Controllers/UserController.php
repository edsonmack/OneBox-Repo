<?php
// Call InsertUser Model Function >>> insert to db
namespace App\Controllers;

use CodeIgniter\Controller;

class UserController extends BaseController
{
    public function create_user()
    {
    
    $request = \Config\Services::request();
        // Check for AJAX request.
        if ($request->isAJAX()) {
            // Insert data from the POST request
            $firstname = $request->getPost('firstname');
            $lastname = $request->getPost('lastname');
            $email = $request->getPost('email');
            $passwd = $request->getPost('passwd');
            $status = 1;
            $created_date = date('Y-m-d');

            exit(var_dump($status));
        }
    



    // return view('create_account');
    }
}
