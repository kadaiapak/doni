<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BeritaModel;

class Berita extends BaseController
{
    protected $BeritaModel;
    public function __construct()
    {
        $this->BeritaModel = new BeritaModel();
    }

    public function index()
    {
        $data = [  
            'title' => 'Blog Post',
            'blog_list' =>$this->BeritaModel->getBlog(),
            'isi' =>  'blog/v_blog'
        ];

        echo view('layout/v_wrapper', $data);
    }

    public function detail($id='')
    {
        $data = [  
            'title' => 'Blog Post',
            'blog' =>$this->BeritaModel->getBlog($id),
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
        $this->BeritaModel->save([
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
