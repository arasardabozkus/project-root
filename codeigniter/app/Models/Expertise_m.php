<?php

namespace App\Models;

use CodeIgniter\Model;

class Expertise_m extends Model
{
    protected $table = 'expertise';
    protected $primaryKey = 'id';
    protected $allowedFields = ['exp','percent','lang'];

    public function getExpertise($lang){
        $lang = esc(strtolower($lang));
        $builder = $this->db->table('expertise');
        $exp = $builder->select('*')->where('lang',$lang)->get()->getResult();
        return $exp;
    }
    public function uploadExpertise(array $exps,string $lang){
        $lang = esc(strtolower($lang));
        $builder = $this->db->table('expertise');

        $lang = esc(strtolower($lang));

        $builder = $this->db->table('expertise');
        $builder->delete(['lang'=>$lang]);
        foreach ($exps as $exp){
            $builder->set(['exp' => esc($exp['exp']),'percent' => esc($exp['percent']),'lang' => $lang]);
            yield $builder->insert();
        }
    }

}