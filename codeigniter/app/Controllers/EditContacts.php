<?php

namespace App\Controllers;

use App\Models\Contact_m;

class EditContacts extends BaseController
{
    public function getContacts(){
        $contact_m = new Contact_m();
        $data['contacts'] = $contact_m->getContacts();
        return view('Panel/Contact/edit_contacts_v',$data);
    }
    public function addContact(){
        return view('Panel/Contact/add_contact_v');
    }
    public function submitContact(){
        $contact_m = new Contact_m();

        $icon = $this->request->getVar('icon');
        if(preg_match('/<i class="(?:.*\s)?([^"]*)"><\/i>/',$icon,$matches)){
            $icon = $matches[0];
        }
        else{
            session()->setFlashdata('updateStatus',[0,'Geçerli bir ikon girmediniz, tekrar deneyin!']);
            return redirect()->to('admin/edit_contacts');
        }

        $contact = [
            'name' =>$this->request->getVar('name'),
            'link' => $this->request->getVar('link'),
            'icon' => $icon,
            'onTop' => $this->request->getVar('onTop')
        ];
        if($contact_m->insertContact($contact)){
            session()->setFlashdata('updateStatus',[1,'Link başarıyla eklendi!']);
        }
        else{
            session()->setFlashdata('updateStatus',[0,'Link yüklenemedi, tekrar deneyin!']);
        }
        return redirect()->to(base_url('admin/edit_contacts'));
    }
    public function rmContact(int $id){
        $contact_m = new Contact_m();
        $contact_m->removeContact($id);
    }
    public function alterContact(int $id){
        $contact_m = new Contact_m();
        $data['contact'] = $contact_m->getContactById($id);
        return view('Panel/Contact/alter_contact_v',$data);
    }
    public function submitAlter(){
        $contact_m = new Contact_m();
        $contact = [
            'id' =>$this->request->getVar('id'),
            'name' => $this->request->getVar('name'),
            'link' => $this->request->getVar('link'),
            'icon' => $this->request->getVar('icon'),
            'onTop' => $this->request->getVar('onTop')
        ];
        if($contact_m->updateContact($contact)){
            session()->setFlashdata('updateStatus',[1,'Link başarıyla güncellendi!']);
        }
        else{
            session()->setFlashdata('updateStatus',[0,'Link güncellenemedi, tekrar deneyin!']);
        }
        return redirect()->to(base_url('admin/edit_contacts'));
    }
}