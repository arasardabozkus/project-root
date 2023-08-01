<?php

namespace App\Controllers;


use App\Models\Expertise_m;

class EditExpertise extends BaseController
{
    protected array $data;
    public function index()
    {
        return view('Panel/edit_expertise_v');
    }
    public function getExpertise($lang){
        global $data;
        $db = new Expertise_m();
        $exps = $db->getExpertise($lang);
        $data['exps'] = $exps;
        $data['lang'] = $lang;
        $data['current_langs'] = $current_langs = array_slice(scandir(FCPATH . '../codeigniter/app/Language/'),3);
        return view("Panel/edit_expertise_v",$data);
    }
    public function uploadExpertise(){
        global $data;

        $lang = esc(strtolower($this->request->getVar('langs')));

        $cn =  new Expertise_m();

        //configure expertise set array according data from post
        $exps = [];
        $_POST = array_values($_POST);
        $i =1;
        $index =0;
        $counter = 0;
        while ($i<count($_POST)){
            if($counter!=1){
                $exps[$index]['exp'] = $_POST[$i];
                $i++;
                $counter++;
                continue;
            }
            else{
                $exps[$index]['percent'] = $_POST[$i];
                $i++;
                $index++;
                $counter=0;
            }
        }
        $isSuccessful = true;
        foreach ($cn->uploadExpertise($exps,$lang) as $status){
            if(!$status){
                $isSuccessful = false;
                break;
            }
        }
        session()->setFlashdata('updateStatus',$isSuccessful);
        return redirect()->to('admin/edit_expertise/getExpertise/'.$lang);
    }
}