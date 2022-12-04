<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use Firebase\JWT\JWT;

class Login extends ResourceController
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
            'username' => 'required'
        ];
        if($this->validate($rules)) $this->fail($this->validator->getErrors());
        $model = new UserModel();
        $user = $model->where("username",$this->request->getVar("username"))->first();
        if(!$user) return $this->failNotFound("Username tidak ditemukan");
        
        $verify = password_verify($this->request->getVar('pass'),$user['pass']);
        if(!$verify) return $this->fail('Kata sandi yang Anda Masukkan salah');

        $key = getenv('TOKEN_SECRET');
        $payload = array(
            "iat" => 1356999524,
            "nbf" => 1357000000,
            "uid" => $user['userId'],
            "username" => $user['username']
        );

        

        $token = JWT::encode($payload, $key, 'HS256');
        $user['token'] = $token;
        unset($user['pass']);
        return $this->respond($user);
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
