<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\AdminModel;
class Movies extends BaseController
{
    

    public function upcomming()
	{
		$data = array();
		
		$data['title'] ='Up Comming';
		$adminModel = new AdminModel();
        $latestmovies =   $adminModel->where('catogery' ,1)->limit(30)->findall();
	   
 
		
		$data['latestmovies'] = $latestmovies;
	echo view('header/header' , $data);
	echo view('movie-grid' , $data);
	}

    public function latest()
	{
		$data = array();
		
		$data['title'] ='Latest';
		$adminModel = new AdminModel();
        $latestmovies =   $adminModel->where('catogery' , 2)->limit(30)->findall();
	   
 
		
		$data['latestmovies'] = $latestmovies;
	echo view('header/header' , $data);
	echo view('movie-grid' , $data);
	}
    public function tvshows()
	{
		$data = array();
		
		$data['title'] ='Tv Shows';
		$adminModel = new AdminModel();
        $latestmovies =   $adminModel->where('catogery' , 3)->limit(30)->findall();
	   
 
		
		$data['latestmovies'] = $latestmovies;
	echo view('header/header' , $data);
	echo view('movie-grid' , $data);
	}
    public function mostwatched()
	{
		$data = array();
		
		$data['title'] ='Most Watched';

		$adminModel = new AdminModel();
        $latestmovies =   $adminModel->where('catogery' , 4)->limit(30)->findall();
		   
	 
		    
			$data['latestmovies'] = $latestmovies;
	    echo view('header/header' , $data);
        echo view('movie-grid' , $data);
	}
    
    public function details($movieID = ''){

			
		if(isset($_GET['id'])){
			$data = array();
			$adminModel = new AdminModel();
			$latestmovies =   $adminModel->where('id' , $_GET['id'])->first();
		   
	 
		    
			$data['movieData'] = $latestmovies;
			  
			 
			echo view('header/header',$data);
			echo view('movie-detail',$data);
		}
		
    }
 
}
