<?php

namespace App\Models;

use CodeIgniter\Model;

class Content_m extends Model
{
    protected $table = 'sitedata';
    protected $primaryKey = 'id';
    protected $allowedFields = ['desc','userfile','lang'];
    public function updateContent(string $name, string $value, string $lang){
        $name = esc($name);
        $value = esc($value);
        $lang = strtolower(esc($lang));
        $builder = $this->db->table('sitedata');

        if(!empty($this->getContent($name,$lang))>0){
            $builder->set('value',$value);
            $builder->where(['name'=>$name,'lang'=>$lang]);
            return $builder->update();
        }
        else{
            $builder->set(['name'=>$name,'value'=>$value,'lang'=>$lang]);
            return $builder->insert();
        }
    }
    public function getContent($name,$lang){
        $name = esc($name);
        $lang = esc(strtolower($lang));

        $builder = $this->db->table('sitedata');

        $query = $builder->select('value')->where(['name'=>$name,'lang'=>$lang]);
        return $query->get()->getResult();
    }
}