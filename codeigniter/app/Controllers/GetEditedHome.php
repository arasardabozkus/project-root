<?php

namespace App\Controllers;

use App\Models\Content_m;

class GetEditedHome extends BaseController
{
    protected array $data;

    public function index(){
        return view('Panel/edit_description_v');
    }
    public function upload(){
        global $data;
        //get admin input
        $data['lang'] = esc(strtolower($this->request->getVar('langs')));
        $data['desc'] = esc($this->request->getVar('desc'));

        //database
        $model = new Content_m();
        session()->set('lang',$data['lang']);

        if($this->request->is('post')){
            if($model->updateContent('maindesc',$data['desc'],$data['lang'])){
                if($this->request->getFile('userfile')->getSize() >0){
                    $file = $this->request->getFile('userfile');
                    $this->validateAndUploadFile($file);
                }

                else{
                    session()->setFlashdata('updateStatus',true);
                    return redirect()->to(base_url('admin/edit_home/maindesc/'.$data['lang']));
                }
            }
            else{
                session()->setFlashdata('updateStatus',false);
                return redirect()->to(base_url('admin/edit_home/maindesc/'.$data['lang']));
            }
        }
        return redirect()->to(base_url('admin/edit_home/maindesc/'.$data['lang']));

    }
    private function validateAndUploadFile(){
        global $data;
        helper(['filesystem_helper']); //delete_files() helper
        if($this->request->getFile('userfile')->getSize()>0){
            $file = $this->request->getFile('userfile');
        }

        // define rules for file validation
        $rules = [
            'userfile' =>[
                'rules' => [
                    'mime_in[userfile,image/jpg,image/jpeg,image/png]',
                ],
                'label' => 'Image file'
            ]
        ];

        //define custom errors
        $errors = [
            'userfile' => [
                'mime_in[userfile]' => "Yüklediğiniz dosya geçerli formatta değil",
            ]
        ];

        //run validation
        if($this->validate($rules,$errors) && isset($file)){
            session()->setFlashdata('updateStatus',true);
            $file->move(FCPATH . '/upload/images/Avatar','avatar.'.pathinfo($_FILES['userfile']['name'],PATHINFO_EXTENSION),true);
        }
        else{
            $data['errors'] = $errors;
            return redirect()->to(base_url('admin/edit_home/maindesc/tr'));
        }
    }
    public function getValue($name,$lang){
        global $data;
        $content_model = new Content_m();
        $content = $content_model->getContent($name,$lang)[0]->value;
        $data['content'] = $content;
        $data['lang'] = $lang;
        $data['current_langs'] = $current_langs = array_slice(scandir(FCPATH . '../codeigniter/app/Language/'),3);
        return view('Panel/edit_description_v',$data);
    }
}