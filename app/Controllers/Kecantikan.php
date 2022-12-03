<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\PasienKecantikan;
 
class Kecantikan extends ResourceController
{
    use ResponseTrait;
    // all users
    public function index()
    {
        $model = new PasienKecantikan();
        $data['perawatan_kecantikan_pasien'] = $model->orderBy('id', 'ASC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new PasienKecantikan();
        $data = [
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'jk'  => $this->request->getVar('jk'),
            'umur'  => $this->request->getVar('umur'),
            'tanggal'  => $this->request->getVar('tanggal'),
            'catatan'  => $this->request->getVar('catatan'),
            'username'  => $this->request->getVar('username')
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
        $model = new PasienKecantikan();
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
        $model = new PasienKecantikan();
        $json = $this->request->getJSON();
        if ($json) {
            $data = [
                'nama_pasien' => $json->nama_pasien,
                'jk'  => $json->jk,
                'umur'  => $json->umur,
                'tanggal'  => $json->tanggal,
                'catatan'  => $json->catatan
            ];
        } else {
            $input = $this->request->getRawInput();
            $data = [
                'nama_pasien' => $input['nama_pasien'],
                'jk'  => $input['jk'],
                'umur'  => $input['umur'],
                'tanggal'  => $input['tanggal'],
                'catatan'  => $input['catatan']
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
        $model = new PasienKecantikan();
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