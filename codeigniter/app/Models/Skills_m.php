<?php

namespace App\Models;

use CodeIgniter\Model;

class Skills_m extends Model
{
    protected $table = 'skillset';
    protected $primaryKey = 'id';
    protected $allowedFields = ['general','specific','lang'];

    public function getSkillset($lang){
        $lang = esc(strtolower($lang));
        $builder = $this->db->table('skillset');
        $skills = $builder->select('*')->where('lang',$lang)->get()->getResult();
        return $skills;
    }
    public function updateSkillSet(array $skillset,string $lang){
        $lang = esc(strtolower($lang));

        $builder = $this->db->table('skillset');
        $builder->delete(['lang'=>$lang]);
        foreach ($skillset as $skill){
            $builder->set(['general' => esc($skill['general']),'specific' => esc($skill['specific']),'lang' => $lang]);
            yield $builder->insert();
        }
    }
}