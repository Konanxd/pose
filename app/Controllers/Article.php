<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Article extends BaseController
{
    public function index()
    {
        return view('./pages/article');
    }
}
