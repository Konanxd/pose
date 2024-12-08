<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('./layout/guest');
    }

    public function dashboard(): string
    {
        return view('./layout/dashboard');
    }
}
