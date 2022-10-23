<?php

namespace App\Controllers;
use App\Models\userModel;
class Crud extends BaseController
{
    
    public function index()
    {
        $userModel = model('userModel');
        $data['users'] = $userModel->findAll();
        return view('crud', $data);
    }

    public function create()
    {
        $data=[
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
            'pass'=>$this->request->getPost('pass'),
            'office'=>$this->request->getPost('office'),
            'phone'=>$this->request->getPost('phone')
        ];
        $userModel=model('userModel');
        $userModel->insert($data);
        
        $data['users'] = $userModel->findAll();
        return view('crud', $data);
    }

}