<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function dashboard(): string
    {
        return view('components/header')
            .view('components/side_bar')
            .view('components/topbar')
            .view('components/second_topbar')
            .view('components/footer');
    }
}
