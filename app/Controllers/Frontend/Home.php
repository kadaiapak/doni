<?php

namespace App\Controllers\Frontend;
use App\Controllers\BaseController;
use App\Models\BlogModel;

class Home extends BaseController
{
    protected $BlogModel;
    public function __construct()
    {
        $this->BlogModel = new BlogModel();
    }
    public function index()
    {
        $data = [  
            'title' => 'Interior Padang',
            'blog_list' =>$this->BlogModel->getSomeBlog(),
        ];
        echo view('frontend/v_home_fe', $data);
    }
}
