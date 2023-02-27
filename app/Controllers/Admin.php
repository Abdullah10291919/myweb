<?php
namespace App\Controllers;
$this->session = \Config\Services::session(); 
use App\Models\UserModel;
use App\Models\AdminModel;

class Admin extends BaseController {


    // function __construct()
    // {
	// 	parent::__construct();
		  
    // //     $this->load->model('adminmodel');
	// //   $this->load->library('session'); 
	// }

    public function login(){

        $session = session();
           if(isset($_SESSION['adminlogin'])){
            // print_r('adminis login');
          
            echo view('admin/template/header');
            echo view('admin/template/sidebar');
            echo view('admin/dashboard');
            echo view('admin/template/footer');
        }else{
                if(isset($_POST['email'])){


                    $userModel = new UserModel();

                    $email = $this->request->getPost('email');
                    $password = $this->request->getPost('password');
            

                
                    $user = $userModel->where('email', $email)->first();
                   
                    if ($user &&  $user['password'] == $password) {
                        // Successful login
                        $session->set('adminlogin' , $user['email']);
                        echo view('admin/template/header');
                        echo view('admin/template/sidebar');
                        echo view('admin/dashboard');
                        echo view('admin/template/footer');
                    } else {
                        // Failed login
                        return redirect()->back()->with('error', 'Invalid username or password');
                    }
                   
                

                }

        
                echo view('admin/auth/login');
        }
    }

//     public function dashboard(){
//         if(!isset($_SESSION['adminlogin'])){
//             redirect('admin');
//         }else{
//             $this->load->view('admin/template/header');
//             $this->load->view('admin/template/sidebar');
         
//             $this->load->view('admin/dashboard');

//             $this->load->view('admin/template/footer');

//         }
//     }
    // public function addcatogery(){
    //     if(!isset($_SESSION['adminlogin'])){
    //         echo view('admin/auth/login')
    //     }else{

    //         if(isset($_POST['catogeryTitle'] )){
                    
    //                     $data = array(

    //                         'title'=>$_POST['catogeryTitle']
    //                     );

    //             $res = $this->adminmodel->insert('genre' ,$data);

    //             if($res == 1){
    //                 $this->session->set_flashdata('message' , 'success');
    //             }else{
    //                 $this->session->set_flashdata('message' , 'fail');
    //             }
           
                
    //         }
    //         $this->load->view('admin/template/header');
    //         $this->load->view('admin/template/sidebar');
    //         $this->load->view('admin/addcatogery');
    //         $this->load->view('admin/template/footer');

    //     }
    // }

    function movies(){
        $adminModel = new AdminModel();
            if(isset($_POST['moviesadd'])){

            }

             echo view('admin/template/header');
             echo view('admin/template/sidebar');
             echo view('admin/addMovies');
            echo view('admin/template/footer');
      


    }

//     function catogery(){
//         if(!isset($_SESSION['adminlogin'])){
//             redirect('admin');
//         }else{
//                 $data = array();
//           $data['genrelist']  =  $this->adminmodel->getalldata('genre' );
               

//             $this->load->view('admin/template/header');
//             $this->load->view('admin/template/sidebar');
//             $this->load->view('admin/catogerylist' , $data);
//             $this->load->view('admin/template/footer');

//         }
//     }
    public function signup(){
        $session = session();
         if(isset($_POST['email'])){
             
          
             
            $userModel = new UserModel();
                
            $data = array(
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'username' =>  $_POST['username'],
                'email' =>   $_POST['email'],
                'password' =>  $_POST['password'],
                'role' => 2
            );
            
        
           $res =  $userModel->insert($data);
              $session->set('reponse' , "User created successfully!");    
        }
        
            echo view('admin/auth/sign-up');
    }

//     public function registration(){
       
        
//     }
}