<?php

namespace App\Controllers;

use App\Models\Messages_m;

class HandleMessages extends BaseController
{
    public function getMessage(){
        date_default_timezone_set('Europe/Istanbul');
        $message = [
            'name' => $this->request->getVar('name'),
            'mail' => $this->request->getVar('email'),
            'subject' => $this->request->getVar('subject'),
            'message' => $this->request->getVar('message'),
            'time' => date('Y-m-d H:i:s')
        ];
        foreach ($message as $item){
            if($item==null){
                session()->setFlashdata('updateStatus',[0,'None of the input fields should be left empty!']);
                return redirect()->to(base_url('#contact'));
            }
        }

        $reCaptcha = $this->reCaptcha();
        if($reCaptcha!=null){
            if($reCaptcha['success']){
                $messages_m = new Messages_m();
                $messages_m->insertMessage($message);
                session()->setFlashdata('updateStatus',[1,'Message is successfully sent!']);
            }
            else{
                session()->setFlashdata('updateStatus',[0,'reCaptcha failed, your message is not sent!']);
            }
        }
        else{
            session()->setFlashdata('updateStatus',[0,'reCaptcha did not work properly, your message is not sent!']);
        }
        return redirect()->to(base_url('#contact'));
    }
    private function reCaptcha(){
        $response = $this->request->getVar('g-recaptcha-response');
        if(!empty($response)){
            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $key = '6LfySQwnAAAAANkx1XAVup70dxF3ygsz_rekR-m4';
            $rem_ip = $_SERVER['REMOTE_ADDR'];
            //forming request address
            $complete_url = $url . '?secret='.$key.'&response='.$response.'&remoteip='.$rem_ip;
            //requesting json response
            $json_response = file_get_contents($complete_url);
            $final_response = json_decode($json_response,true);
            return $final_response;
        }
        else{
            return null;
        }
    }

    public function readMessages(){
        $messages_m = new Messages_m();
        $data['messages'] = $messages_m->getMessages();
        return view('Panel/Messages/messages_v',$data);
    }

    public function setRead($id){
        $messages_m = new Messages_m();
        $messages_m->setRead($id);
        $data['message'] = $messages_m->getMessageById($id);
        return view('Panel/Messages/message_v',$data);
    }
    public function rmMessage($id){
        $messages_m = new Messages_m();
        $messages_m->deleteMessage($id);
    }
}