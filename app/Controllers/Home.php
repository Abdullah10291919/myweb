<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       
        echo view('header/header');
        echo view('index');
  
        
    }

    
	public function latestmovies(){
		 
		echo view('header/header');
		 echo view('movie-grid');
	}
}
