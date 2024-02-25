<?php

namespace App\Controllers;


class MyQuery extends BaseController
{
    public function index()
    {
        $db = db_connect();

        print_r($db);
        // if (db )
        // echo $this->db-query("SELECT VERSION()")->row('version');
        // $db = \config\Database::connect();       

        // if ($db!== false) {
        //     echo "Connected to the database successfully!";
        // } else {
        //     die("Unable to connect to the database.");
        // }

    }
}

