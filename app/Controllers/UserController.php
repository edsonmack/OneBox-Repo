<?php
// Call InsertUser Model Function >>> insert to db
namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UserModel;

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
            #Encrypt passwd to md5
            $passwd = md5($request->getPost('passwd'));

            // Array of data to be inserted...
            $data = [
                'first_name' => $firstname,
                'last_name'  => $lastname,
                'email'  => $email,
                'role_id' => 1,
                'created_date' => date('Y-m-d'),
                'status' => 1
            ];

            // Instiantiate Model 
            $userModel = new UserModel();
            if($userModel->insert_data($data)){
                exit(var_dump('Successfully data insert.....'));
            }else{
                exit(var_dump('Failure to insert!'));
            }
        }
    



    // return view('create_account');
    }
}
