<?php

namespace App\Models;

use CodeIgniter\Model;

class Testimonial_m extends Model
{
    public function getTestimonials($lang){
        $lang = esc(strtolower($lang));
        $builder = $this->db->table('testimonial');
        $testimonials = $builder->select('*')->where('lang',$lang)->get()->getResult();
        return $testimonials;
    }
    public function uplaodTestimonial(array $testimonials,string $lang){
        $lang = esc(strtolower($lang));
        $builder = $this->db->table('testimonial');

        $lang = esc(strtolower($lang));

        $builder = $this->db->table('testimonial');
        $builder->delete(['lang'=>$lang]);
        foreach ($testimonials as $testimonial){
            $builder->set(['name' => esc($testimonial['name']),'quote'=>esc($testimonial['quote']),'field'=>esc($testimonial['job']),'lang'=>$lang]);
            yield $builder->insert();
        }
    }
}