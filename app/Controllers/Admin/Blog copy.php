<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BlogModel;

class Blog extends BaseController
{
    protected $BlogModel;
    public function __construct()
    {
        $this->BlogModel = new BlogModel();
    }

    public function index()
    {
        $data = [  
            'title' => 'Blog Post',
            'blog_list' =>$this->BlogModel->getBlog(),
            'isi' =>  'blog/v_blog'
        ];

        echo view('layout/v_wrapper', $data);
    }

    public function detail($id='')
    {
        $data = [  
            'title' => 'Blog Post',
            'blog' =>$this->BlogModel->getBlog($id),
            'isi' =>  'blog/v_blog_detail'
        ];
        dd($data['blog']);
        echo view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Create Blog',
            'isi' =>  'blog/v_blog_tambah'
        ];

        echo view('layout/v_wrapper', $data);
    }

    public function simpan()
    {
        $this->BlogModel->save([
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),        
        ]);


        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('admin/blog'));
    }

    public function edit()
    {
        $data = [
            'title' => 'Edit Blog',
            'isi' =>  'blog/v_blog_edit'
        ];

        echo view('layout/v_wrapper', $data);
    }
}
