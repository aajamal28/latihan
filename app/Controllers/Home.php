<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('form_scan_request');
    }

    public function login()
    {
        return view('login');
    }
}
