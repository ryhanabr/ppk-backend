<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Register extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    use ResponseTrait;
    public function index()
    {
        helper(['form']);
        $rules = [
            'nama_lengkap' => 'required|is_string',
            'username' => 'required|is_unique[auth.username]',
            'email' => 'required|valid_email|is_unique[auth.email]',
            'alamat' => 'required',
            'telp' => 'required',
            'konf' => 'matches[pass]'
        ];
        if($this->validate($rules)) $this->fail($this->validator->getError());
        $data = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
            'telp' => $this->request->getVar('telp'),
            'pass' => password_hash($this->request->getVar('pass'),PASSWORD_BCRYPT)
        ];
        $model = new UserModel();

        if($model->where('username',$data['username'])->first()) {
            $response = [
                'status' => 0,
                'msg' => "Username tidak tersedia"
            ];
        } elseif ($model->where('email',$data['email'])->first()) {
            $response = [
                'status' => 0,
                'msg' => "Email telah digunakan"
            ];
        } else {
            $model->save($data);
            $response = [
                'status' => 1,
                'msg' => "Registrasi berhasil"
            ];
        }

        return $this->respond($response);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
