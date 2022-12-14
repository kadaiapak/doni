<?php 
namespace App\Models;
use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blog';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['sampul','judul','kategori','deskripsi','isi','user_id', 'is_active'];

    public function getBlog($id = false)
    {
        if($id == false){
            $builder = $this->db->table('blog');
            $builder->select('blog.id, sampul, judul,kategori, deskripsi, isi, dilihat ,user_id, user.nama_user as nama_user, user.avatar, created_at');
            $builder->join('user', 'user.id = blog.user_id');
            $hasil =  $builder->get();
            return $hasil->getResult();
        }
        $builder = $this->db->table('blog');
        $builder->select('blog.id, sampul, judul, kategori, deskripsi, isi, dilihat, user_id, user.nama_user as nama_user, user.avatar, created_at');
        $builder->join('user', 'user.id = blog.user_id');
        $builder->where('blog.id', $id);
        $hasil = $builder->get();
        return $hasil->getFirstRow();

        // return $this->where(['id' => $id])->first();
        // return $this->db->table('blog')->get()->getResultArray();
    }

    public function getSomeBlog()
    {
        $query =  $this->db->query('SELECT * FROM blog LIMIT 5;');
        return $query->getResult();
    }

    function getPagination($num, $keyword = null)
    {
        $builder = $this->builder();
        $builder->join('user', 'user.id = blog.user_id');
        return [
            'title' => 'Interior Padang | Blog',
            'isi' => 'frontend/v_blog_list_fe',
            'blog_list' =>$this->paginate($num),
            'pager' => $this->pager
        ];
    }
}

?>