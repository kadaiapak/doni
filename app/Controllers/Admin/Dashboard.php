<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BlogModel;

class Dashboard extends BaseController
{
    public function index()
    { 
        $data = [  
            'title' => 'Dashboard',
            'isi' =>  'dashboard/v_dashboard'
        ];
        echo view('layout/v_wrapper', $data);
    }
}
