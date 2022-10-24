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
        $userModel = new userModel();
        $data=[
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
            'pass'=>$this->request->getPost('pass'),
            'office'=>$this->request->getPost('office'),
            'phone'=>$this->request->getPost('phone')
        ];
        $userModel=model('userModel');
        $userModel->insert($data);
        return $this->response->redirect(site_url('/crud'));
    }

    public function singleUser($id = null){
        $userModel = new userModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit-view', $data);
    }

    public function update(){
        $userModel = new userModel();
        $id = $this->request->getVar('id');
        $data = [
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
            'pass'=>$this->request->getPost('pass'),
            'office'=>$this->request->getPost('office'),
            'phone'=>$this->request->getPost('phone')
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/crud'));
    }
 
    public function delete($id = null){
        $userModel = new userModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/crud'));
    }
}