<?php

namespace App\Controllers;
use App\Models\userModel;
class Crud extends BaseController
{
    
    public function index()
    {
        $table = new \CodeIgniter\View\Table();
        //$userModel = model('userModel');
        //$users = $userModel->findAll();
        // return view('crud', $data);

        //print_r($userModel->findAll());
        // $data['tabla'] = $table->generate($users);
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
        return view('crud');
    }

}