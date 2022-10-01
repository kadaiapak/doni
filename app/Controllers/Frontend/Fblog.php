<?php

namespace App\Controllers\Frontend;
use App\Controllers\BaseController;
use App\Models\BlogModel;

class Fblog extends BaseController
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
            'isi' => 'frontend/v_home_fe',
            'blog_list' =>$this->BlogModel->getSomeBlog(),
            'segment' => $this->uri->getSegment(1)
        ];
        echo view('layout/v_fe_wrapper', $data);

    }

     public function blog_list()
    {
        $data = [  
            'title' => 'Interior Padang | Blog',
            'isi' => 'frontend/v_blog_list_fe',
            'blog_list' =>$this->BlogModel->getBlog(),
            'segment' => $this->uri->getSegment(1)
        ];
        echo view('layout/v_fe_wrapper', $data);
    }

    public function detail($id='')
    {
        $data = [  
            'title' => 'Interior Padang | Blog',
            'isi' => 'frontend/v_blog_detail_fe',
            'blog'  =>  $this->BlogModel->getBlog($id),
        ];
        echo view('layout/v_fe_wrapper', $data);
    }
}
