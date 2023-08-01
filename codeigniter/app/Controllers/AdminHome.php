<?php

namespace App\Controllers;

use App\Models\Messages_m;
use CodeIgniter\HTTP\UserAgent;

class AdminHome extends BaseController
{
    public function index()
    {
        return view('Panel/login_v');
    }

    public function insight()
    {
        return view('Panel/insight_v');
    }

    public function main_page(){
        $messages_m = new Messages_m();
        $data['unreadCount'] = $messages_m->getUnread();
        return view('Panel/panel_v',$data);
    }
    public function pages(){
        return view('Panel/pages_v');
    }
}