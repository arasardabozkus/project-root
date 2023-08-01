<?php

namespace App\Controllers;

use App\Models\Content_m;
use App\Models\Skills_m;
use PhpParser\Node\Stmt\Echo_;

class EditAbout extends BaseController
{
    protected array $data;
    public function index()
    {
    }
    private function getSkills($lang){
        $db = new Skills_m();
        $skills = $db->getSkillset($lang);
        return $skills;
    }
    public function getContent($lang){
        global $data;
        $data['skills'] = $this->getSkills($lang);
        $data['lang'] = $lang;
        $data['current_langs'] = array_slice(scandir(FCPATH . '../codeigniter/app/Language/'),3);

        $content_model = new Content_m();

        $data['aboutContent'] = $content_model->getContent('about',$lang)[0]->value;
        $data['skillsContent'] = $content_model->getContent('skills',$lang)[0]->value;
        return view('Panel/edit_about_v',$data);
    }
    public function uploadContent(){
        global $data;
        //get adamin input
        $lang = $this->request->getVar('langs');
        $about = $this->request->getVar('about');
        $skills = $this->request->getVar('skills');

        //update sitedata table
        $content = new Content_m();
        $content->updateContent('about',$about,$lang);
        $content->updateContent('skills',$skills,$lang);

        //configure skillset array according data from post
        $skillset = [];
        $_POST = array_values($_POST);
        $i =3;
        $index =0;
        $counter = 0;
        while ($i<count($_POST)){
            if($counter!=1){
                $skillset[$index]['general'] = $_POST[$i];
                $i++;
                $counter++;
                continue;
            }
            else{
                $skillset[$index]['specific'] = $_POST[$i];
                $i++;
                $index++;
                $counter=0;
            }
        }

        //update skillset table
        $skillset_m = new Skills_m();
        $isSuccesful = $content->updateContent('about',$about,$lang) && $content->updateContent('skills',$skills,$lang);
        if($isSuccesful){
            foreach ($skillset_m->updateSkillSet($skillset,$lang) as $status){
                if(!$status){
                    $isSuccesful = false;
                }
            }
        }

        helper(['url']);

        session()->setFlashdata('updateStatus',$isSuccesful);
        return redirect()->to('admin/edit_about/getContent/'.$lang);
    }
}
