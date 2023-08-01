<?php

namespace App\Models;

use CodeIgniter\Model;
class Services_m extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $allowedFields = ['header','desc','lang','icon'];

    public function getServices($lang){
        $lang = esc(strtolower($lang));
        $builder = $this->db->table('services');
        $services = $builder->select('*')->where('lang',$lang)->get()->getResult();
        return $services;
    }
    public function updateServices(array $services,string $lang){
        $lang = esc(strtolower($lang));

        $builder = $this->db->table('services');
        $builder->delete(['lang' => $lang]);
        foreach ($services as $service){
            $builder->set(['header' => esc($service['header']),'desc' => esc($service['desc']),'icon' => esc($service['icon']),'lang' => $lang]);
            yield $builder->insert();
        }
    }
}