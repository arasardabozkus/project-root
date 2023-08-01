<?php

namespace App\Controllers;

use App\Models\Content_m;
use Config\App;

class AdminLangs extends BaseController
{
    protected array $data;
    public function getLangs(){
        return $current_langs = array_slice(scandir(FCPATH . '../codeigniter/app/Language/'),3);
    }

    public function index(){
        global $data;
        $data['current_langs'] = array_slice(scandir(FCPATH . '../codeigniter/app/Language/'),3);
        return view('Panel/Lang/langs_admin_v',$data);
    }
    public function getContent($lang){
        $data['lang'] = $lang;
        $data['content'] = json_decode(file_get_contents(FCPATH . '../codeigniter/app/Language/'.$lang.'/header.json'),true)['Name'];
        return view('Panel/Lang/header_lang_v',$data);
    }
    public function addLang(){
        $abbr = esc($this->request->getVar('abbr'));
        $name = strtolower(esc($this->request->getVar('langname')));

        if(!is_dir(FCPATH . '../app/Language/'.$abbr)){
            $content = json_decode(file_get_contents(FCPATH . '../codeigniter/app/blueprints_lang/contentbp.json'),true);
            $header = json_decode(file_get_contents(FCPATH . '../codeigniter/app/blueprints_lang/headerbp.json'),true);

            mkdir(FCPATH . '../codeigniter/app/Language/'.$abbr);
            //put header
            $header['Name'] = $name;
            $header['Abbrevation'] = $abbr;
            file_put_contents(FCPATH . '../codeigniter/app/Language/'.$abbr.'/header.json',json_encode($header));

            //put content (default turkish)
            file_put_contents(FCPATH . '../codeigniter/app/Language/'.$abbr.'/content.json',json_encode($content));

            //create php file
            $landing_php = fopen(FCPATH . '../codeigniter/app/Language/'.$abbr.'/Landing.php','w+');
            $phpdata = "<?php\n\$content_json = file_get_contents(FCPATH . '../codeigniter/app/Language/".$abbr."/content.json');\n\$content = json_decode(\$content_json,true);\nreturn \$content;";
            fwrite($landing_php,$phpdata);

            //upload necessary content to db
            $c_model = new Content_m();
            $c_model->updateContent('maindesc','lorem ipsum',$abbr);
            $c_model->updateContent('skills','lorem ipsum',$abbr);
            $c_model->updateContent('about','lorem ipsum',$abbr);

            return redirect()->to(base_url('admin/admin_langs'));
        }
        else{
            session()->setFlashdata('updateStatus','Zaten böyle bir dil dosyası mevcut.');
            return redirect()->to(base_url('admin/admin_langs'));
        }
    }
    public function removeLang($lang){
        if(is_dir(FCPATH . '../codeigniter/app/Language/'.$lang)){
            $files = glob(FCPATH . '../codeigniter/app/Language/'.$lang.'/*');
            array_map('unlink',$files);
            rmdir(FCPATH . '../codeigniter/app/Language/'.$lang);
        }
    }
}