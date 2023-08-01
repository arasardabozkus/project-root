<?php

namespace App\Controllers;

use App\Models\Portfolios_m;

class EditPortfolio extends BaseController
{
    public function index(){
        return view('Panel/Portfolio/edit_portfolio_v');
    }
    public function getContent($lang){
        $portfolios_m = new Portfolios_m();
        $data['contents'] = $portfolios_m->getPortfolios($lang);
        $data['current_langs'] = array_slice(scandir(FCPATH . '../codeigniter/app/Language/'),3);
        $data['lang'] = $lang;
        return view('Panel/Portfolio/edit_portfolio_v',$data);
    }
    public function addPortfolio(){
        $data['current_langs'] = array_slice(scandir(FCPATH . '../codeigniter/app/Language/'),3);
        return view('Panel/Portfolio/add_portfolio_v',$data);
    }
    public function rmPortfolio(int $id){
        $portfolios_m = new Portfolios_m();
        $portfolios_m->deletePortfolio($id);
    }
    public function alterPortfolio($id){
        $md = new Portfolios_m();
        $data['content'] = $md->getPortfolioById($id);
        return view('Panel/Portfolio/alter_portfolio_v',$data);
    }
    public function rmPic($name){
        if(glob(FCPATH . 'upload/images/Portfolios/'.$name.'.{jpg,png,jpeg}',GLOB_BRACE)!=0){
            $ext = pathinfo(glob(FCPATH . 'upload/images/Portfolios/'.$name.'.{jpg,png,jpeg}',GLOB_BRACE)[0])['extension'];
            unlink(FCPATH . 'upload/images/Portfolios/'.$name.'.'.$ext);
        }
    }
    public function submitAlter(){
        $portfolio = [
            'id' => $this->request->getVar('id'),
            'title' => $this->request->getVar('title'),
            'category' => $this->request->getVar('category'),
            'startDate' => $this->request->getVar('startDate'),
            'budget' => $this->request->getVar('budget'),
            'currency' => $this->request->getVar('currency'),
            'client' => $this->request->getVar('client'),
            'duration' => $this->request->getVar('duration'),
            'text' => $this->request->getVar('text')
        ];
        $portfolios_m = new Portfolios_m();
        if($portfolios_m->updatePortfolio($portfolio)){
            session()->setFlashdata('updateStatus',[1,'Portfolyo başarıyla güncellendi!']);
        }
        else{
            session()->setFlashdata('updateStatus',[0,'Portfolyo güncellenirken bir hata meydana geldi, tekrar deneyin!']);
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
                $img->move('./upload/images/Portfolios','portfolio_page_'.$portfolio['id'].'.'.$img->getExtension(),true);
            }
            if($file->getSize()>0){
                $file->move('./upload/images/Portfolios','portfolio_'.$portfolio['id'].'.'.$file->getExtension(),true);
            }
        }
        else{
            session()->setFlashdata('updateStatus',[0,'Resim geçerli formatta değil! Geçerli bir resmi portfolyoya ekleyebilirsiniz.']);
        }

        return redirect()->to('admin/edit_portfolios/tr');
    }

    public function submitPortfolio(){
        $lang = $this->request->getVar('langs');
        $portfolio = [
            'title' => $this->request->getVar('title'),
            'category' => $this->request->getVar('category'),
            'startDate' => $this->request->getVar('startDate'),
            'budget' => $this->request->getVar('budget'),
            'currency' => $this->request->getVar('currency'),
            'client' => $this->request->getVar('client'),
            'duration' => $this->request->getVar('duration'),
            'text' => $this->request->getVar('text')
        ];
        $portfolios_m = new Portfolios_m();
        if($portfolios_m->uploadPortfolio($portfolio,$lang)){
            session()->setFlashdata('updateStatus',[1,'Portfolyo başarıyla eklendi!']);
        }
        else{
            session()->setFlashdata('updateStatus',[0,'Portfolyo eklenemedi, tekrar deneyin!']);
        }
        //image
        $lastId = $portfolios_m->getLast()[0]->id;

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
                $img->move('./upload/images/Portfolios','portfolio_page_'.$lastId.'.'.$img->getExtension(),true);
            }
            if($file->getSize()>0){
                $file->move('./upload/images/Portfolios','portfolio_'.$lastId.'.'.$file->getExtension(),true);
            }
        }
        else{
            session()->setFlashdata('updateStatus',[0,'Resim geçerli formatta değil! Geçerli bir resmi portfolyoya ekleyebilirsiniz.']);
        }
        return redirect()->to('admin/edit_portfolios/'.$lang);
    }
}