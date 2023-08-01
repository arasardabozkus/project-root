<?php

namespace App\Controllers;

use App\Models\Services_m;

class EditServices extends BaseController
{
    protected array $data;
    public function index(){
        return view("Panel/edit_services_v");
    }
    public function getContent($lang){
        global $data;
        $db = new Services_m();
        $services = $db->getServices($lang);
        $data['services'] = $services;
        $data['lang'] = $lang;
        $data['current_langs'] = $current_langs = array_slice(scandir(FCPATH . '../codeigniter/app/Language/'),3);
        return view("Panel/edit_services_v",$data);
    }
    public function updateContent(){
        global $data;
        $services_m = new Services_m();

        $lang = $this->request->getVar('langs');

        //configure expertise set array according data from post
        $services = [];
        $_POST = array_values($_POST);
        $i =1;
        $index =0;
        $counter = 0;

        $isPregMatched = true;
        while ($i<count($_POST)){
            if($counter==0){
                $services[$index]['header'] = $_POST[$i];
                $i++;
                $counter++;
                continue;
            }
            else if($counter==1){
                $services[$index]['desc'] = $_POST[$i];
                $i++;
                $counter++;
            }
            else{
                if(preg_match('/<i class="(?:.*\s)?([^"]*)"><\/i>/',$_POST[$i],$matches)){
                    $services[$index]['icon'] = htmlspecialchars($matches[0]);
                }
                else{
                    $isPregMatched = false;
                    break;
                }
                $counter=0;
                $i++;
                $index++;
            }
        }
        $isSuccessful=$isPregMatched;
        if($isSuccessful){
            foreach ($services_m->updateServices($services,$lang) as $status){
                if(!$status){
                    $isSuccessful = false;
                    break;
                }
            }
        }
        if (!$isPregMatched){
            session()->setFlashdata('updateStatus',[0,'Geçerli bir ikon etiketi girmediniz, tekrar deneyin']);
        }
        else if($isSuccessful){
            session()->setFlashdata('updateStatus',[1,'Site başarıyla güncellendi']);
        }
        else if(!$isSuccessful){
            session()->setFlashdata('updateStatus',[0,'Bir hata meydana geldi, tekrar deneyin']);
        }
        return redirect()->to('admin/edit_services/getContent/'.$lang);
    }
}