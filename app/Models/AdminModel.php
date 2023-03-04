<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'movies';

    protected $primaryKey = 'id';
    // title,
    // Budget
    		

    protected $allowedFields = ['title','Budget','Country',
    'Director', 'Duration', 'Genre' , 'Language' , 'ProductionCo' 
    ,'moviesStoryLine', 'movietitle', 'catogery_id', 'created_date' ,
     'updated_date' , 'image_url' , 'catogery' ,'release_Date' , 'slug' , 'video_url' ];

    protected $validationRules = [
      
        'title' => 'required|max_length[30]',
        'Budget' => 'required',
        'Country' => 'required',
    ];

    protected $default = [
        'active' => 1,
        'deleted' => 0,
    ];
}