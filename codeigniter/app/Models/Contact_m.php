<?php

namespace App\Models;

class Contact_m extends \CodeIgniter\Model
{
    public function getContacts(){
        $builder = $this->db->table('contacts');

        $query = $builder->select('*');
        return $query->get()->getResult();
    }
    public function getContactById($id){
        $builder = $this->db->table('contacts');

        $query = $builder->select('*')->where(['id' => $id]);
        return $query->get()->getResult()[0];
    }
    public function insertContact($contact){
        foreach ($contact as $key=>$item){
            $contact[$key] = esc($item);
        }
        $builder = $this->db->table('contacts');
        $builder->set(['name' => $contact['name'],'link' => $contact['link'],'icon' => $contact['icon'],'onTop' => $contact['onTop']]);
        return $builder->insert();
    }
    public function removeContact($id){
        $builder = $this->db->table('contacts');
        $builder->delete(['id'=>$id]);
    }
    public function updateContact($new_contact){
        $builder = $this->db->table('contacts');
        foreach ($new_contact as $key=>$item){
            $new_contact[$key] = esc($item);
        }
        $builder->set(['name' => $new_contact['name'],'link' => $new_contact['link'],'icon' => $new_contact['icon'],'onTop' => $new_contact['onTop']]);
        $builder->where(['id' => $new_contact['id']]);
        return $builder->update();
    }
}