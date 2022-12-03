<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DokterModel;
 
class Dokter extends ResourceController
{
    use ResponseTrait;
    // all users
    public function index()
    {
        $model = new DokterModel();
        $data['dokter'] = $model->orderBy('id', 'ASC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new DokterModel();
        $data = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'jk'  => $this->request->getVar('jk'),
            'kategori'  => $this->request->getVar('kategori'),
            'jadwal'  => $this->request->getVar('jadwal')
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
    // single user
    public function show($id = null)
    {
        $model = new DokterModel();
        $data = $model->where('id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new DokterModel();
        $json = $this->request->getJSON();
        if ($json) {
            $data = [
                'nama_lengkap' => $json->nama_lengkap,
                'jk'  => $json->jk,
                'kategori'  => $json->kategori,
                'jadwal'  => $json->jadwal
            ];
        } else {
            $input = $this->request->getRawInput();
            $data = [
                'nama_lengkap' => $input['nama_lengkap'],
                'jk'  => $input['jk'],
                'kategori'  => $input['kategori'],
                'jadwal'  => $input['jadwal']
            ];
        }
        // Insert to Database
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data produk berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }
    // delete
    public function delete($id = null)
    {
        $model = new DokterModel();
        $data = $model->where('id', $id)->delete($id);
        if ($data) {
            $model->delete($id);
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