<?php

namespace App\Controllers;

class EditLangs extends BaseController
{
    protected array $data;

    public function index(){
        return redirect()->to(base_url('admin/langs/content/tr/edit_langs_v'));
    }
    public function updateLangs(){
        $lang = esc(strtolower($this->request->getVar('langs')));
        $content_json = file_get_contents(FCPATH . '../codeigniter/app/Language/'.$lang.'/content.json');
        $content = json_decode($content_json,true);

        if(isset($_POST['Home'])){
            if($this->putContent('Nav') !=0){
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
            else{
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
        }
        if(isset($_POST['Profession'])){
            if($this->putContent('Home')!=0){
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
            else{
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
        }
        if(isset($_POST['Myself'])){
            if($this->putContent('About')){
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
            else{
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
        }
        if(isset($_POST['Set'])){
            if($this->putContent('Expertise')){
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
            else{
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
        }
        if(isset($_POST['WhatIOffer'])){
            if($this->putContent('Services')){
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
            else{
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
        }
        if(isset($_POST['W2G'])){
            if($this->putContent('Work2Gether')){
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
            else{
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
        }
        if(isset($_POST['Works'])){
            if($this->putContent('Portfolio')){
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
            else{
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
        }
        if(isset($_POST['TestimonialH'])){
            if($this->putContent('Testimonial')){
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
            else{
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
        }
        if(isset($_POST['News'])){
            if($this->putContent('Blog')){
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
            else{
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
        }
        if(isset($_POST['YourName'])){
            if($this->putContent('GetInTouch')){
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
            else{
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
        }
        if(isset($_POST['Budget'])){
            if($this->putContent('PortfolioPage')){
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
            else{
                session()->setFlashdata('updateStatus',[1,'Dil başarıyla güncellendi']);
            }
        }

        return redirect()->to(base_url('admin/langs/content/'.$lang."/"."edit_langs_v"));
    }
    private function putContent($segment){
        $lang = esc(strtolower($this->request->getVar('langs')));
        $content_json = file_get_contents(FCPATH . '../codeigniter/app/Language/'.$lang.'/content.json');
        $content = json_decode($content_json,true);

        $content[$segment] = array_slice($_POST,1);
        $new_json = json_encode($content);

        return file_put_contents(FCPATH . '../codeigniter/app/Language/'.$lang.'/content.json',$new_json);
    }
    public function getContent($lang,$viewName){
        global $data;
        $content_json = file_get_contents(FCPATH . '../codeigniter/app/Language/'.$lang.'/content.json');
        $content = json_decode($content_json,true);
        $data['content'] = $content;
        $data['lang'] = $lang;
        $data['current_langs'] = $current_langs = array_slice(scandir(FCPATH . '../codeigniter/app/Language/'),3);

        return view('Panel/Lang/'.$viewName,$data);
    }
}