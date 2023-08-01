<?php

namespace App\Controllers;

use App\Models\Blogs_m;

class EditBlogs extends BaseController
{
    public function index(){
        return view('Panel/Blog/edit_blogs_v');
    }
    public function getBlogs($lang){
        $blogs_m = new Blogs_m();
        $data['contents'] = $blogs_m->getBlogs($lang);
        $data['current_langs'] = array_slice(scandir(FCPATH . '../codeigniter/app/Language/'),3);
        $data['lang'] = $lang;
        return view('Panel/Blog/edit_blogs_v',$data);
    }
    public function addBlog(){
        $data['current_langs'] = array_slice(scandir(FCPATH . '../codeigniter/app/Language/'),3);
        return view('Panel/Blog/add_blog_v',$data);
    }
    public function submitBlog(){
        $lang = $this->request->getVar('langs');
        $blog = [
            'title' => $this->request->getVar('title'),
            'contr' => $this->request->getVar('contr'),
            'subject' => $this->request->getVar('subject'),
            'text' => $this->request->getVar('text'),
            'lang' => $lang,
            'date' => date("Y-m-d")
        ];
        $md = new Blogs_m();
        if($md->uploadBlog($blog,$lang)){
            session()->setFlashdata('updateStatus',[1,'Blog başarıyla eklendi']);
        }
        else{
            session()->setFlashdata('updateStatus',[0,'Blog yüklenemedi, tekrar deneyin!']);
            return redirect()->to(base_url('admin/edit_blogs/tr'));
        }

        //image
        $lastId = $md->getLast()[0]->id;
        helper(['filesystem_helper']);

        $file = $this->request->getFile('mainimg');
        $img = $this->request->getFile('pageimg');

        $rules = [
            'mainimg'=>[
                'label' => "Image File",
                'rules' =>[
                    'mime_in[mainimg,image/jpeg,image/jpg,image/png]'
                ]
            ],
            'pageimg'=>[
                'label' => "Image File",
                'rules' =>[
                    'mime_in[pageimg,image/jpeg,image/jpg,image/png]'
                ]
            ],

        ];
        if($this->validate($rules)){
            if($img->getSize()>0){
                $img->move('./upload/images/Blogs','blog_page_'.$lastId.'.'.$img->getExtension(),true);
            }
            if($file->getSize()>0){
                $file->move('./upload/images/Blogs','blog_'.$lastId.'.'.$file->getExtension(),true);
            }
        }
        else{
            session()->setFlashdata('updateStatus',[0,'Resim geçerli formatta değil! Geçerli bir resmi bloga ekleyebilirsiniz.']);
        }

        return redirect()->to(base_url('admin/edit_blogs/'.$lang));
    }
    public function deleteBlog($id){
        $md = new Blogs_m();
        $md->deleteBlog($id);
    }
    public function alterBlog($id){
        $md = new Blogs_m();
        $data['content'] = $md->getBlogById($id);
        return view('Panel/Blog/alter_blog_v',$data);
    }
    public function rmPic($name){
        if(glob(FCPATH . 'upload/images/Blogs/'.$name.'.{jpg,png,jpeg}',GLOB_BRACE)!=0){
            $ext = pathinfo(glob(FCPATH . 'upload/images/Blogs/'.$name.'.{jpg,png,jpeg}',GLOB_BRACE)[0])['extension'];
            unlink(FCPATH . 'upload/images/Blogs/'.$name.'.'.$ext);
        }
    }
    public function submitAlter(){
        $blog = [
            'id'=>$this->request->getVar('id'),
            'title' => $this->request->getVar('title'),
            'contr' => $this->request->getVar('contr'),
            'subject' => $this->request->getVar('subject'),
            'text' => $this->request->getVar('text'),
            'date' => date("Y-m-d")
        ];
        $md = new Blogs_m();
        if($md->updateBlog($blog)){
            session()->setFlashdata('updateStatus',[1,'Blog başarıyla Güncellendi']);
        }
        else{
            session()->setFlashdata('updateStatus',[0,'Blog güncellenemedi, tekrar deneyin!']);
        }

        //image
        $file = $this->request->getFile('mainimg');
        $img = $this->request->getFile('pageimg');
        $rules = [
            'mainimg'=>[
                'label' => "Image File",
                'rules' =>[
                    'mime_in[mainimg,image/jpeg,image/jpg,image/png]'
                ]
            ],
            'pageimg'=>[
                'label' => "Image File",
                'rules' =>[
                    'mime_in[pageimg,image/jpeg,image/jpg,image/png]'
                ]
            ],

        ];
        if($this->validate($rules)){
            if($img->getSize()>0){
                $img->move('./upload/images/Blogs','blog_page_'.$blog['id'].'.'.$img->getExtension(),true);
            }
            if($file->getSize()>0){
                $file->move('./upload/images/Blogs','blog_'.$blog['id'].'.'.$file->getExtension(),true);
            }
        }
        else{
            session()->setFlashdata('updateStatus',[0,'Resim geçerli formatta değil! Geçerli bir resmi bloga ekleyebilirsiniz.']);
        }
        return redirect()->to(base_url('admin/edit_blogs/tr'));
    }
}