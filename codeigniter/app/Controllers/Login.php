<?php

namespace App\Controllers;

use App\Models\Main_m;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Login extends BaseController
{
    private array $valErrors = array();
    private $session;

    public function index()
    {
        global $session;
        global $valErrors;

        $session = \Config\Services::session(); // current session

        //increment count of form submissions ('tries' in session) for each index call
        if(!empty($session->get('tries'))){
            $session->set('tries',$session->get('tries')+1);
        }
        else{
            $session->set('tries',0);
        }

        if($session->get('tries') >=3){
            $reCaptcha = $this->reCaptcha();
            if($reCaptcha!=null){
                if(!$reCaptcha['success']){
                    $valErrors['reCaptcha'] = 'reCaptcha başarısız, tekrar deneyin.';
                    return view ('Panel/login_v');
                }
                else{
                    return $this->validateAndCheck();
                }
            }
            else{
                $valErrors['reCaptcha'] = 'reCaptcha başarısız, tekrar deneyin.';
                return view ('Panel/login_v');
            }
        }
        else{
            return $this->validateAndCheck();
        }
    }
    private function validateAndCheck(){

        global $valErrors;
        global $session;

        $session = \Config\Services::session(); // current session

        helper(['form']); //helps to validate user input
        helper(['form_validation']);

        //get input data
        $data = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ];
        //if incoming request is post
        if($this->request->is('post')){

            //set validation config
            $rules = [
                'email' =>'required|valid_email',
                'password'=>'required'
            ];
            $errorMessages = [
                'email' => [
                    'required' => 'E-Mail kismi bos birakilamaz',
                    'valid_email' => 'Gecerli bir e-posta adresi girmelisiniz'
                ],
                'password' => [
                    'required' => "Parola alani bos birakilamaz",
                ]
            ];
            $validation = \Config\Services::validation();
            $validation->setRules($rules,$errorMessages);

            //run validation
            if($validation->run($data)){
                $main = new Main_m(); //instantiate related model
                //instantiate the result rows as an array
                $admin = $main->get_admin($data['email']);
                if(!empty($admin)){
                    if(password_verify($data['password'],$admin[0]->password)){
                        $session->remove('tries');
                        $session->setTempdata('isLoggedIn',true,36000);
                        return redirect()->to('admin/panel');
                    }
                    else{
                        $valErrors['password'] = 'E-posta veya şifre hatalı, tekrar deneyin.';
                        $session->setFlashdata('valErrors',$valErrors);
                        return view('Panel/login_v');
                    }
                }
                else{
                    $valErrors['email'] = 'E-posta veya şifre hatalı, tekrar deneyin.';
                    $session->setFlashdata('valErrors',$valErrors);
                    return view('Panel/login_v');
                }
            }
            else{
                //load the view back with additional information about validation errors
                $valErrors = $validation->getErrors();
                $session->setFlashdata('valErrors',$valErrors);
                return view('Panel/login_v');
            }
        }
        else{
            return view('Panel/login_v');
        }
    }

    private function reCaptcha(){
        $response = $this->request->getVar('g-recaptcha-response');
        if(!empty($response)){
            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $key = '6Lc6fMImAAAAAPQm7DArqRLJOmgxYniOVprlkmag';
            $rem_ip = $_SERVER['REMOTE_ADDR'];
            // forming request address
            $complete_url = $url . '?secret='.$key.'&response='.$response.'&remoteip='.$rem_ip;
            //requesting json response file
            $json_response = file_get_contents($complete_url);
            $final_response = json_decode($json_response,true);
            return $final_response;
        }
        else{
            return null;
        }
    }
}
