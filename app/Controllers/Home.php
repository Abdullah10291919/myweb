<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return "hello ";
        echo view('header/header');
        echo view('index');
  
        // return view('welcome_message');
    }
}
