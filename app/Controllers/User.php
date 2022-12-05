<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;

class User extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = new UserModel();
        $data = $model->orderBy('nama_lengkap', 'ASC')->findAll();
        return $this->respond($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($userId = null)
    {
        $model = new UserModel();
        $data = $model->where('userId', $userId)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
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
        $model = new UserModel();
        $data = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'username'  => $this->request->getVar('username'),
            'email'  => $this->request->getVar('email'),
            'alamat'  => $this->request->getVar('alamat'),
            'telp'  => $this->request->getVar('telp'),
            'pass'  => $this->request->getVar('pass')
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data produk berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
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
    public function update($userId = null)
    {
        $model = new UserModel();
        $json = $this->request->getJSON();
        if ($json) {
            $data = [
                'nama_lengkap' => $json->nama_lengkap,
                'alamat'  => $json->alamat,
                'telp'  => $json->telp,
                'pass' => $json->pass
            ];
        } else {
            $input = $this->request->getRawInput();
            $data = [
                'nama_lengkap' => $input['nama_lengkap'],
                'alamat'  => $input['jk'],
                'telp'  => $input['telp'],
                'pass'  => $input['pass']
            ];
        }
        // Insert to Database
        $model->update($userId, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data produk berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($userId = null)
    {
        $model = new UserModel();
        $data = $model->where('userId', $userId)->delete($userId);
        if ($data) {
            $model->delete($userId);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data produk berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}
