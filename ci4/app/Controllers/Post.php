<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ArtikelModel;

class Post extends ResourceController
{
    use ResponseTrait;

    // GET /post
    public function index()
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }

    // POST /post
    public function create()
    {
        $model = new ArtikelModel();

        // Validate input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required|min_length[3]',
            'isi'   => 'required',
            'status'=> 'required|in_list[active,inactive]'
        ]);

        if (!$this->validate($validation->getRules())) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi'   => $this->request->getVar('isi'),
            'status'=> $this->request->getVar('status')
        ];
        
        $model->insert($data);

        return $this->respondCreated([
            'status' => 201,
            'messages' => ['success' => 'Data artikel berhasil ditambahkan.']
        ]);
    }

    // GET /post/{id}
    public function show($id = null)
    {
        $model = new ArtikelModel();
        $data = $model->find($id);

        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }

    // PUT /post/{id}
    public function update($id = null)
    {
        $model = new ArtikelModel();

        if (!$model->find($id)) {
            return $this->failNotFound('Data tidak ditemukan.');
        }

        // Validate input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required|min_length[3]',
            'isi'   => 'required',
            'status'=> 'required|in_list[active,inactive]'
        ]);

        if (!$this->validate($validation->getRules())) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi'   => $this->request->getVar('isi'),
            'status'=> $this->request->getVar('status')
        ];

        if ($model->update($id, $data)) {
            return $this->respond([
                'status' => 200,
                'messages' => ['success' => 'Data artikel berhasil diubah.']
            ]);
        } else {
            return $this->failServerError('Gagal update data.');
        }
    }

    // DELETE /post/{id}
    public function delete($id = null)
    {
        $model = new ArtikelModel();

        if (!$model->find($id)) {
            return $this->failNotFound('Data tidak ditemukan.');
        }

        $model->delete($id);
        return $this->respondDeleted([
            'status' => 200,
            'messages' => ['success' => 'Data artikel berhasil dihapus.']
        ]);
    }
}
