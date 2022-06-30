<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RequestDetailModel;

class RequestController extends BaseController
{
    protected $reqDetil;

    function __construct()
    {
        $this->reqDetil = new RequestDetailModel();
    }

    public function index()
    {
        //
    }
     
    public function getDetailRequest($id)
    {
        $req = $this->reqDetil->getData($id);
        $res = [
            "request" => $req,
            "status" => 200
        ];
        return json_encode($req);
    }
}
