<?php

namespace App\Controllers;

use App\Models\Blogs_m;
use App\Models\Contact_m;
use App\Models\Content_m;
use App\Models\Expertise_m;
use App\Models\Portfolios_m;
use App\Models\Services_m;
use App\Models\Skills_m;
use App\Models\Testimonial_m;

class Home extends BaseController
{
    public function index()
    {
        \Config\Services::session()->set('locale',$this->request->getLocale());
        $contentModel = new Content_m();
        $skillModel = new Skills_m();
        $expertiseModel = new Expertise_m();
        $servicesModel = new Services_m();
        $testimonialsModel = new Testimonial_m();
        $portfolios_m = new Portfolios_m();
        $contact_m = new Contact_m();
        $data = [
            'maindesc' =>$contentModel->getContent('maindesc',$this->request->getLocale())[0]->value,
            'about' =>$contentModel->getContent('about',$this->request->getLocale())[0]->value,
            'skills' =>$contentModel->getContent('skills',$this->request->getLocale())[0]->value,
            'skillset' => $skillModel->getSkillset($this->request->getLocale()),
            'exps' => $expertiseModel->getExpertise($this->request->getLocale()),
            'services' =>$servicesModel->getServices($this->request->getLocale()),
            'testimonials' => $testimonialsModel->getTestimonials($this->request->getLocale()),
            'portfolios'=>$portfolios_m->getPortfolios($this->request->getLocale()),
            'contacts' =>$contact_m->getContacts(),
            'current_langs' =>array_slice(scandir(FCPATH . '../app/Language/'),3),
            'lang' => $this->request->getLocale()
        ];
        return view('landing_v',$data);
    }
    public function singlePortfolio($id){
        $portfolios_m = new Portfolios_m();
        $contact_m = new Contact_m();
        $data['portfolio'] = $portfolios_m->getPortfolioById($id);
        $data['lang'] = $this->request->getLocale();
        $data['contacts'] = $contact_m->getContacts();
        return view('portfolio_single_v',$data);

    }
    public function blogs(){
        $blogs_m = new Blogs_m();
        $contact_m = new Contact_m();
        $data['blogs'] = $blogs_m->getBlogs($this->request->getLocale());
        $data['lang'] = $this->request->getLocale();
        $data['contacts'] = $contact_m->getContacts();
        return view('blogs',$data);
    }
    public function singleBlog($id){
        $blogs_m = new Blogs_m();
        $contact_m = new Contact_m();
        $data['blog'] = $blogs_m->getBlogById($id);
        $lang = $this->request->getLocale();
        $data['lang'] = $lang;
        $data['latest3'] = $blogs_m->getLatest3($lang);
        $data['contacts'] = $contact_m->getContacts();
        return view('blog_single_v',$data);
    }
}
