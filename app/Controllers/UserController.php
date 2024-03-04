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
                'user_password' => $passwd,
                'role_id' => 1,
                'created_date' => date('Y-m-d'),
                'status' => 1
            ];

            // Instiantiate Model 
            $userModel = new UserModel();
            $test = $userModel->insert_data($data);

            $result = array(
                'succ_msg' => 'User has been created successfully!',
                'err_msg' => 'Sorry, It seems an error has occur!',
                'succ_code' => 200,
                'err_code' => 404,
            );

            if($test > 0){
                return view('create_account', $result);
            }else{
                return view('create_account', $result);
            }
 
        }
    



    // return view('create_account');
    }
}
