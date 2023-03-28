<?php
namespace App\Controllers;
$this->session = \Config\Services::session(); 
use App\Models\UserModel;
use App\Models\AdminModel;

class Admin extends BaseController {
 

    public function login(){


        $data = array();
        $adminModel = new AdminModel();
        $latestmovies =   $adminModel->where('catogery' , 1)->countAllResults();
       
        $adminModel = new AdminModel();
        $upcomming =   $adminModel->where('catogery' , 2)->countAllResults();
       
        $adminModel = new AdminModel();
        $mostlike =   $adminModel->where('catogery' , 3)->countAllResults();
       
        $adminModel = new AdminModel();
        $mostWatch =   $adminModel->where('catogery' , 4)->countAllResults();
       
        $adminModel = new AdminModel();
        $tvshow =   $adminModel->where('catogery' , 5)->countAllResults();
       
        $data['totallatestMovie'] = $latestmovies;
        $data['upcomming'] = $upcomming;
        $data['mostlike'] = $mostlike;
        $data['mostWatch'] = $mostWatch;
        $data['tvshow'] = $tvshow;
        $session = session();
           if(isset($_SESSION['adminlogin'])){
           
            echo view('admin/template/header');
            echo view('admin/template/sidebar');
            echo view('admin/dashboard' , $data);
            echo view('admin/template/footer');
            // exit;
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
                        echo view('admin/dashboard' , $data);
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
    public static function slugify($text, string $divider = '-')
    {
      // replace non letter or digits by divider
      $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
    
      // transliterate
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    
      // remove unwanted characters
      $text = preg_replace('~[^-\w]+~', '', $text);
    
      // trim
      $text = trim($text, $divider);
    
      // remove duplicate divider
      $text = preg_replace('~-+~', $divider, $text);
    
      // lowercase
      $text = strtolower($text);
    
      if (empty($text)) {
        return 'n-a';
      }
    
      return $text;
    }


    public function movieslist(){
        
        if($_GET['id']){
            
            $data  = array();
            
		$adminModel = new AdminModel();
        $latestmovies =   $adminModel->where('catogery' , $_GET['id'])->findall();
		   
	 
       
            $data['movielist'] = $latestmovies;
            echo view('admin/template/header');
            echo view('admin/template/sidebar');
            echo view('admin/movieslist' , $data);
            echo view('admin/template/footer');
        }
    }
    public function userlist(){
        
        
            
            $data  = array();
         
        $userModel = new UserModel();
             $user = $userModel->findall();
        
          $data['userlist'] =  $user;
            echo view('admin/template/header');
            echo view('admin/template/sidebar');
            echo view('admin/userlist' , $data);
            echo view('admin/template/footer');
        
    }
    public function addmovies()
{
    $adminModel = new AdminModel();
    $data = array();
    helper(['form', 'url' , 'upload']);
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
        // $_POST['slug'] = $this->slugify($_POST['title']);
      
        // Handle image upload
        if (isset($_POST)) {
             
            $file = $this->request->getFile('image');
             

            
            if ($file->isValid() && ! $file->hasMoved()) {
                $newName = $file->getRandomName();

                // print_r(WRITEPATH . 'uploads');
                // exit;
                $file->move('./public/uploads', $newName);
                          $_POST['image_url'] = $newName;
                           
                    $res = $adminModel->insert($_POST);

                    if ($res) {
                        $data = array(
                            "success" => true,
                            "message" => 'Record Added Successfully'
                        );
                        echo json_encode($data);
              
                        }else{
                            $data = array(
                                "success" => false,
                                "message" => 'Try Again!'
                            );
                            echo json_encode($data);   
                        }
        
                    }
        } else {
            $data = array(
                "success" => false,
                "message" => 'Try Again!'
            );
            echo json_encode($data);
        }
        exit;
    }
    echo view('admin/template/header');
    echo view('admin/template/sidebar');
    echo view('admin/addMovies');
    echo view('admin/template/footer');
  

   
}

    public function deleteproduct(){
        if(isset($_POST['id'])){
         $adminModel = new AdminModel();
          try{
            $res = $adminModel->delete($_POST['id']);
          }catch(Exception $ex){
           echo  $ex.message;
           exit;
          }
          $response = [
                'message' => 'movie deleted successfully',
                'success' => true
            ];
            echo json_encode($response);
        }else{
            $response = [
                'message' => 'movie not found',
                'success' => false
            ];
            echo json_encode($response);
        }
    }
    public function deleteuser(){
        if(isset($_POST['id'])){
         $adminModel = new UserModel();
          try{
            $res = $adminModel->delete($_POST['id']);
          }catch(Exception $ex){
           echo  $ex.message;
           exit;
          }
          $response = [
                'message' => 'user deleted successfully',
                'success' => true
            ];
            echo json_encode($response);
        }else{
            $response = [
                'message' => 'user not found',
                'success' => false
            ];
            echo json_encode($response);
        }
    }
    
    // function addmovies(){
    //     $adminModel = new AdminModel();
    //         if(isset($_POST['title'])){

                
              
    //             print_r($_POST['image']);
    //             return;
    //            $_POST['slug'] = $this->slugify($_POST['title']);
              
    //            try{
    //             $res =  $adminModel->insert($_POST);
    //           }catch(Exception $ex){
    //             print_r($ex) ;
    //           }
              
    //            if( $res ){
    //             $data = array(
    //                 "success" => true,
    //                 "message" => 'Record Added Successfully'
    //             );
    //             echo json_encode($data);
    //            }else{
    //             $data = array(
    //                 "success" => false,
    //                 "message" => 'Try Again!'
    //             );
    //             echo json_encode($data);
    //            }
    //             exit;
    //         }

    //          echo view('admin/template/header');
    //          echo view('admin/template/sidebar');
    //          echo view('admin/addMovies');
    //          echo view('admin/template/footer');
      


    // }

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