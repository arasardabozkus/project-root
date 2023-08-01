<?php

namespace App\Models;

class Messages_m extends \CodeIgniter\Model
{
    public function insertMessage($message){
        foreach ($message as $key=>$item){
            $message[$key] = esc($item);
        }
        $builder = $this->db->table('messages');
        $builder->set(
            [
                'name' => $message['name'],
                'mail' => $message['mail'],
                'subject' => $message['subject'],
                'message' => $message['message'],
                'time' => $message['time']
            ]
        );
        return $builder->insert();
    }
    public function setRead($id){
        $builder = $this->db->table('messages');
        $builder->set(['isRead' => 1]);
        $builder->where(['id' => $id]);
        $builder->update();
    }
    public function getMessages(){
        $builder = $this->db->table('messages');
        $query = $builder->select('*')->orderBy('id','DESC');
        return $query->get()->getResult();
    }
    public function getUnread(){
        $builder = $this->db->table('messages');
        $builder->select('id')->where(['isRead' =>0]);
        return $builder->countAllResults();
    }
    public function getMessageById($id){
        $builder = $this->db->table('messages');
        $query = $builder->select('*')->where(['id' => $id]);
        return $query->get()->getResult()[0];
    }
    public function deleteMessage($id){
        $builder = $this->db->table('messages');
        $builder->where(['id' => $id]);
        $builder->delete();
    }
}