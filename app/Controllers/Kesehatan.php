<?php

namespace App\Controllers;

use App\Models\KesehatanModel;
use CodeIgniter\RESTful\ResourceController;

class Kesehatan extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = new KesehatanModel();
        $data = $model->findAll();
        
        return $this->respond($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($username = null)
    {
        $model = new KesehatanModel();
        $status = $this->request->getVar('status');
        $nama = ($this->request->getVar('nama')) ? $this->request->getVar('nama') : "" ;

        if($status) {
            $data = $model->where('username',$username)->where('status',$status)->like('nama_pasien',$nama)->findAll();
        } else {
            $data = $model->where('username',$username)->like('nama_pasien',$nama)->findAll();
        }

        return $this->respond($data);
    
    }

    public function view($id = null)
    {
        $model = new KesehatanModel();
        $data = $model->where('id', $id)->first();

        return $this->respond($data);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return $this->respond('halo');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        
        $model = new KesehatanModel();

        $data = [
            "nama_pasien" => $this->request->getVar('nama_pasien'),
            "jk" => $this->request->getVar('jk'),
            "umur" => $this->request->getVar('umur'),
            "kategori" => $this->request->getVar('kategori'),
            "tanggal" => $this->request->getVar('tanggal'),
            "keluhan" => $this->request->getVar('keluhan'),
            "username" => $this->request->getVar('username'),
            "status" => "Menunggu"
        ];

        $cek = $model->where('nama_pasien',$data['nama_pasien'])->where('tanggal',$data['tanggal'])->first();
        if($cek) {
            $response = [
                'status' => "Gagal",
                'msg' => "Satu nama tidak boleh mendaftar dua kali pada hari yang sama",
            ];
            return $this->respond($response);
        } else if($data['tanggal'] < date('Y/m/d')) {
            $response = [
                'status' => "Gagal",
                'msg' => "Tanggal tidak boleh kurang dari hari ini",
            ];

            return $this->respond($response);
        }

        $model->insert($data);
        $response = [
            'status' => "OK",
            'msg' => "Antrian berhasil dibuat",
            'id' => $model->getInsertID()
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
        $model = new KesehatanModel();
        $json = $this->request->getJSON();
        if ($json) {
            $data = [
                'kategori' => $json->kategori,
                'tanggal'  => $json->tanggal,
                'keluhan' => $json->keluhan
            ];
        } else {
            $input = $this->request->getRawInput();
            $data = [
                'kategori' => $input['kategori'],
                'tanggal'  => $input['tanggal'],
                'keluhan' => $input['keluhan']
            ];
        }

        if($data['tanggal'] < date('Y/m/d')) {
            $response = [
                'status' => "Gagal",
                'msg' => "Tanggal tidak boleh kurang dari hari ini",
            ];

            return $this->respond($response);
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
        $model = new KesehatanModel();
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
