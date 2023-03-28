<?php
namespace App\Controllers;
$this->session = \Config\Services::session(); 
use App\Models\UserModel;
use App\Models\AdminModel;

class HomeMovie extends BaseController {

 
    public function latestmovies(){


        $adminModel = new AdminModel();
        $res =   $adminModel->where('catogery' , 2)->limit(10)->findall();
        $data = array();
        if(count( $res) > 0){
            $data['status'] = 'success';
            $data['message'] = 'Record fetched successfully';
            $data['data'] =  $res;
        }else{
            $data['status'] = 'false';
            $data['message'] = 'No Record Found';
            $data['data'] =  $res;
        }

        return json_encode($data);


        return json_encode();
    }
 
 
}