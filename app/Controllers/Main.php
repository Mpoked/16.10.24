<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        echo view("index");
    }



    public function tabulka()
    {
        echo view("tabulka");
    }

    public function carousel()
    {
        echo view("carousel");
    }

    public function hraci()
    {
        echo view("hraci");
    }
    
}