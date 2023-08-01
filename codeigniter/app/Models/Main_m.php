<?php

namespace App\Models;

use CodeIgniter\Model;

class Main_m extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email','password'];
    public function get_admin($email){
        $email = esc($email);

        $builder = $this->db->table('admins');
        $query = $builder->select('*')->where('email',$email);
        return $query->get()->getResult();
    }
}