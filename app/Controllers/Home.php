<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\AdminModel;
class Home extends BaseController
{
    public function __construct()
    {
        helper('url');
    }
    public function index()
    {
       
         
        $session = session();
        if ($session->has('reponse')) {
            $session->remove('reponse');
        }

             if(isset($_POST['username'])){

                $userModel = new UserModel();    
                $data = array(
                    'first_name' => $_POST['username'],
                    'last_name' => $_POST['username'],
                    'username' =>  $_POST['username'],
                    'email' =>   $_POST['email'],
                    'password' =>  $_POST['password'],
                    'role' => 2
                );
                
               $res =  $userModel->insert($data);
                  $session->set('reponse' , "User created successfully!");   
             
            }else if(isset($_POST['signinemail'])){

                $userModel = new UserModel();

                    $email = $this->request->getPost('signinemail');
                    $password = $this->request->getPost('signinpassword');
                    $user = $userModel->where('email', $email)->first();
                   
                     
                    if ($user &&  $user['password'] == $password) {
                        // Successful login
                        $session->set('userLogin' , $user['email']);
                      
                    } else {
                        // Failed login
                        $session->set('reponse' , "Invalid username or password");   
                
                    }
               }




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

    public  function searchmovies(){
        $data = array();
        $data['title'] = 'Search Movies';
       
        echo view('header/header',$data  );
        echo view('watch-later');
        
        
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


    public function logout(){
        $session = session();
       
        if ($session->has('userLogin')) {
 
            $session->remove('userLogin');
        }
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
