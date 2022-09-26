<?php 
namespace App\Models;
use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'user';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['nama_user','avatar','email','level', 'is_active'];

    public function cek_login($email, $password)
    {
        return $this->db->table('user')
        ->where(array('email' => $email, 'password' => $password))
        ->get()->getRowArray();
    }

}

?>