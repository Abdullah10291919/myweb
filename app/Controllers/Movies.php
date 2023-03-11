<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\AdminModel;
class Movies extends BaseController
{
    

    public function upcomming()
	{
	    echo view('header/header');
        echo view('movie-grid');
	}

    public function latest()
	{
		echo view('header/header');
		echo view('movie-grid');
	}
    public function tvshows()
	{
        echo view('header/header');
		echo view('movie-grid');
	}
    public function mostwatched()
	{
		echo view('header/header');
        echo view('movie-grid');
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
