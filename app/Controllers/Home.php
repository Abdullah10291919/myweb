<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\AdminModel;
class Home extends BaseController
{
    public function index()
    {
       
        $data = array();
        $adminModel = new AdminModel();
        $res =   $adminModel->where('catogery' , 2)->limit(50)->findall();
        $data['latestmovies'] = $res;
        echo view('header/header' , $data);
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
