<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProductModel;

class Navigation extends BaseController
{

    protected $userModel;
    protected $product;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->product = new ProductModel();
    }
    
    // Routes dari raymond
    public function template()
    {
        return view('user/v_template');
    }

    public function user()
    {
        return view('user/v_index');
    }

    public function product()
    {
        $data['product'] = $this->product->findAll();
        // dd($data);
        return view('user/v_product', $data);
    }
    public function add_product()
    {
        return view('user/v_add_product');
    }
    public function data()
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'supply' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
           
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $data = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'supply' => $this->request->getVar('supply')
        ];
        
 
        session()->setFlashdata('message', 'Tambah Data Pasien Berhasil');
        $this->product->save($data);
        
        return redirect()->to('/');
    }
}
