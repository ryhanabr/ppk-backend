<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\AuthModel;
 
class Auth extends ResourceController
{
    use ResponseTrait;
    // all users
    public function index()
    {
        $model = new AuthModel();
        $data['auth'] = $model->orderBy('userId', 'ASC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new AuthModel();
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
    // single user
    public function show($userId = null)
    {
        $model = new AuthModel();
        $data = $model->where('userId', $userId)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($userId = null)
    {
        $model = new AuthModel();
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
    // delete
    public function delete($userId = null)
    {
        $model = new AuthModel();
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