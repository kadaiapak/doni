<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Coba extends BaseController
{

    public function test()
    {
        $data = [  
            'title' => 'Coba',
            'isi' =>  'coba/v_coba'
        ];

        echo view('layout/v_wrapper', $data);
    }

}
