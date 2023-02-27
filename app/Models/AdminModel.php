<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'movies';

    protected $primaryKey = 'id';

    // protected $allowedFields = ['first_name','last_name','role','username', 'email', 'password'];

    // protected $validationRules = [
      
    //     'username' => 'required|min_length[3]|max_length[30]',
    //     'email' => 'required|valid_email',
    //     'password' => 'required|min_length[8]',
    // ];

    // protected $default = [
    //     'active' => 1,
    //     'deleted' => 0,
    // ];
}