<?php

namespace App\Controllers;

use App\Models\DokterModel;
use CodeIgniter\RESTful\ResourceController;

class Dokter extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = new DokterModel();
        $data = $model->findAll();

        return $this->respond($data);
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
        $model = new DokterModel();
        $data = [
            "nama_lengkap" => $this->request->getVar('nama_lengkap'),
            "jk" => $this->request->getVar('jk'),
            "kategori" => $this->request->getVar('kategori'),
            "jadwal" => $this->request->getVar('jadwal'),
        ];

        $model->insert($data);
        $response = [
            'status' => "OK",
            'msg' => "Antrian berhasil dibuat"
        ];

        return $this->respond($response);
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
        $model = new DokterModel();
        $json = $this->request->getJSON();
        if ($json) {
            $data = [
                'kategori'  => $json->kategori,
                'jadwal' => $json->jadwal
            ];
        } else {
            $input = $this->request->getRawInput();
            $data = [
                'kategori'  => $input['kategori'],
                'jadwal' => $input['jadwal']
            ];
        }
        // Insert to Database
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => "Data berhasil diubah!"
        ];
        return $this->respond($response);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new DokterModel();
        $data = $model->where('id', $id)->first();
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'data Id' => $data['id'],
                'messages' => 'Data berhasil dihapus'
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}
