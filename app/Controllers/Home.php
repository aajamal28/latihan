<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($segment = false)
    {
        if($segment == false){
            $wh = 'WHRM01';
        }else{
            $wh = $segment;
        }
        $data['wh'] = $wh;
        return view('board', $data);
    }
}