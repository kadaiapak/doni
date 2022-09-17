<?php 
namespace App\Models;
use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'blog';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['judul','isi'];
    public function getBlog($id = false)
    {
        if($id == false){
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();

        // return $this->db->table('blog')->get()->getResultArray();
    }
}

?>