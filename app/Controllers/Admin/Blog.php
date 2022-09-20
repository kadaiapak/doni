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
            'title' => 'Detail Posting',
            'blog'  =>  $this->BlogModel->getBlog($id),
            'isi'   =>  'blog/v_blog_detail'
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Create Blog',
            'isi' =>  'blog/v_blog_tambah',
            'validation' => \Config\Services::validation()
        ];

        echo view('layout/v_wrapper', $data);
    }

    public function simpan()
    {
        if(!$this->validate([
            'judul' =>[
                'rules' => 'required|is_unique[blog.judul]',
                'errors' => [
                    'required' => '{field} blog harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'sampul' =>[
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'File yang anda upload bukan gambar',
                    'mime_in' => 'File yang anda upload bukan gambar'
                ]
            ],
            'isi' =>[
                'rules' => 'required',
                'errors' => [
                    'required' => 'Ceritakan something'
                ]
            ],
        ])){
            // $data['validation'] = \Config\Services::validation();
            return redirect()->to(base_url('admin/blog/tambah'))->withInput();
        }

        $fileSampul = $this->request->getFile('sampul');
        if($fileSampul->getError() == 4){
                $namaSampul = 'default.jpg';
        } else {
            $namaSampul = $fileSampul->getRandomName();
            $fileSampul->move('img', $namaSampul);
        }

        $this->BlogModel->save([
            'sampul' => $namaSampul,
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),  
            'is_active' => 1      
        ]);

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('admin/blog'));
    }

    public function edit($id='')
    {
        $data = [
            'title' => 'Edit Blog',
            'isi' =>  'blog/v_blog_edit',
            'blog' => $this->BlogModel->getBlog($id),
            'validation' => \Config\Services::validation()
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function update($id='')
    {
        $fileBaru = $this->request->getFile('sampul');
        $fileLama = $this->request->getVar('sampulLama');
        if($fileBaru->getError() == 4)
        {
            $namaSampul = $fileLama;
        }else {
            $namaSampul = $fileBaru->getRandomName();
            $fileBaru->move('img', $namaSampul);
            unlink('img/' . $fileLama);
        }
        $this->BlogModel->save([
            'id' => $id,
            'sampul' => $namaSampul,
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),   
            'is_active' => 1,
            'tanggal' => date("d-m-Y")    
        ]);

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to(base_url('/admin/blog'));
    }

    public function hapus($id)
    {
        $blog = $this->BlogModel->getBlog($id);
        if($blog['sampul'] != 'default.jpg')
        {
            unlink('img/' .$blog['sampul'] );
        }
        $this->BlogModel->delete($id);

             // cari gambar berdasarkan ID
        
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('/admin/blog'));
    }

    public function uploadGambar()
    {
        if($this->request->getFile('file')){
            $dataFile = $this->request->getFile('file');
            $fileName = $dataFile->getRandomName();
            $dataFile->move("img", $fileName);
            echo base_url("img/$fileName");
        }
    }

    function deleteGambar()
    {
            $src = $this->request->getVar('src');
            // http://localhost:8080/img/1663411062_437c527ab32c7d534603.jpg
            // http://localhost:8080/
            if($src)
            {
                $file_name =   str_replace(base_url() .'/', "", $src); 
                echo $file_name;
                if(unlink($file_name)){
                    echo 'Delete File berhasil';
                }           
            }
        }
}
