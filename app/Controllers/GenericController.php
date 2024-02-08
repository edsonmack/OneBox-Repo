<?php

namespace App\Controllers;

class GenericController extends BaseController
{
    public function general_template(): string
    {
        return view('general_template');

        // return view('templates/header', $data)
        //     . view('pages/' . $page)
        //     . view('templates/footerpart');
    }
}
