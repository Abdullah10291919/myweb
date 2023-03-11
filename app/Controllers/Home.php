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
        $latestmovies =   $adminModel->where('catogery' , 2)->limit(10)->findall();
        $upcommingMovies =   $adminModel->whereIn('catogery' , [2, 1])->limit(3)->findall();
        $latesttv =   $adminModel->where('catogery' , 3)->limit(10)->findall();
        $totalMovies = $adminModel->whereIn('catogery',  [2, 1])->findall();
        $totalshowTV = $adminModel->where('catogery',  3)->findall();
       
        $data['latestmovies'] = $latestmovies;
        $data['upcommingMovies'] = $upcommingMovies;
        $data['latesttv'] = $latesttv;
        $data['totalMovies'] = count($totalMovies);
        $data['totalshowTV'] = count($totalshowTV);
        echo view('header/header' , $data);
        echo view('index');
  
        
    }

    
	public function latestmovies(){
		 

        $data = array();
        $adminModel = new AdminModel();
        $latestmovies =   $adminModel->where('catogery' , 2)->limit(30)->findall();
       
        $data['title'] = 'Latest Movies';
       
        $data['latestmovies'] = $latestmovies;
		echo view('header/header');
		 echo view('movie-grid' , $data);
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
