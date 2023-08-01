<?php

namespace App\Controllers;

use App\Models\Services_m;
use App\Models\Testimonial_m;

class EditTestimonial extends BaseController
{
    protected $data;
    public function index(){
        return view('Panel/edit_testimonial_v');
    }
    public function getContent($lang){
        global $data;
        $testimonial_m = new Testimonial_m();
        $data['testimonials'] = $testimonial_m->getTestimonials($lang);
        $data['lang'] = $lang;
        $data['current_langs'] = $current_langs = array_slice(scandir(FCPATH . '../codeigniter/app/Language/'),3);
        return view('Panel/edit_testimonial_v',$data);
    }
    public function updateTestimonial(){
        global $data;

        $lang = $this->request->getVar('langs');

        //create testimonial list
        $testimonials = $this->createTestimonials();


        //upload testimonials to database
        $testimonial_m = new Testimonial_m();
        foreach ($testimonial_m->uplaodTestimonial($testimonials,$lang) as $status){
            if(!$status){
                session()->setFlashdata('updateStatus',[0,'Bir hata meydana geldi, tekrar deneyin!']);
                break;
            }
        }
        session()->setFlashdata('updateStatus',[1,'Referanslar başarıyla güncellendi!']);
        return redirect()->to(base_url('admin/edit_testimonial/getContent/'.$lang));
    }

    private function createTestimonials(){
        //configure expertise set array according data from post
        $testimonials = [];

        $_POST = array_values($_POST);
        $i =1;
        $index =0;
        $counter = 0;

        while ($i<count($_POST)){
            if($counter==0){
                $testimonials[$index]['name'] = $_POST[$i];
                $i++;
                $counter++;
                continue;
            }
            else if($counter==1){
                $testimonials[$index]['job'] = $_POST[$i];
                $i++;
                $counter++;
            }
            else if($counter==2){
                $testimonials[$index]['quote'] = $_POST[$i];
                $counter=0;
                $index++;
                $i++;
            }
        }
        return $testimonials;
    }
}