<?php

namespace App\Controllers;

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
    
    public function details(){
        echo view('header/header');
		echo view('movie-detail');
    }
 
}
