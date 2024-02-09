<?php

namespace App\Controllers;

class GenericController extends BaseController
{
    public function general_template(): string
    {
        return  view('templates/headerpart')
               .view('templates/sidebar')
               .view('templates/topbar')
               .view('pages/dashboard_view')
               .view('templates/footerpart');
    }
}
