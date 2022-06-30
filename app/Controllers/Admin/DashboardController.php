<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data['uri'] = $this->request->uri->getSegments();
        return view('admin\dashboard',$data);
    }
}
