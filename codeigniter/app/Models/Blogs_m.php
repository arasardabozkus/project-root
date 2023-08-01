<?php

namespace App\Models;

class Blogs_m extends \CodeIgniter\Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','title','contributor','additionDate','subject','blogtext','lang'];
    public function getBlogs($lang){
        $lang = esc(strtolower($lang));

        $builder = $this->db->table('blogs');

        $query = $builder->select(['id','additionDate','contributor','subject','title'])->where(['lang'=>$lang]);
        return $query->get()->getResult();
    }
    public function getBlogById($id){
        $builder = $this->db->table('blogs');

        $query = $builder->select('*')->where(['id'=>$id]);
        return $query->get()->getResult()[0];
    }
    public function getLast(){
        $builder = $this->db->table('blogs');

        $query = $builder->select('*')->orderBy('id','DESC')->limit(1);
        return $query->get()->getResult();
    }
    public function getLatest3($lang){
        $builder = $this->db->table('blogs');

        $query = $builder->select('*')->where(['lang'=>$lang])->orderBy('id','DESC')->limit(3);
        return $query->get()->getResult();
    }
    public function uploadBlog(array $blog, $lang){
        $lang= esc(strtolower($lang));
        foreach ($blog as $key=>$item){
            $blog[$key] = esc($item);
        }
        $builder = $this->db->table('blogs');

        $builder->set([
            'title' => $blog['title'],
            'contributor' => $blog['contr'],
            'additionDate' => $blog['date'],
            'subject' => $blog['subject'],
            'blogtext' => $blog['text'],
            'lang' => $lang
        ]);
        return $builder->insert();
    }
    public function deleteBlog(int $id){
        $builder = $this->db->table('blogs');
        $builder->where(['id' => $id]);
        $builder->delete();
    }
    public function updateBlog(array $blog){
        foreach ($blog as $key=>$item){
            $blog[$key] = esc($item);
        }
        $builder = $this->db->table('blogs');
        $builder->set([
            'title' => $blog['title'],
            'contributor' => $blog['contr'],
            'additionDate' => $blog['date'],
            'subject' => $blog['subject'],
            'blogtext' => $blog['text'],
        ]);
        $builder->where(['id'=>$blog['id']]);
        return $builder->update();
    }
}