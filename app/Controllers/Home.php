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


    function contactus(){
	 echo view('header/header');
	echo  view('contact-us');
	}

	function comingsoon(){
	 
	echo view('coming-soon');
	}
	function loginregister(){
		 
	 echo view('login-register');
	}
	function testimonials(){
	echo view('header/header');
	echo view('testimonials');
	}
}
