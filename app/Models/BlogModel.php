<?php 
namespace App\Models;
use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blog';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['sampul','judul','deskripsi','isi', 'is_active'];

    public function getBlog($id = false)
    {
        if($id == false){
            return $this->findAll();
        }

        
        return $this->where(['id' => $id])->first();

        // return $this->db->table('blog')->get()->getResultArray();
    }

    public function getSomeBlog()
    {
        $query =  $this->db->query('SELECT * FROM blog LIMIT 5;');
        return $query->getResult();
    }

}

?>