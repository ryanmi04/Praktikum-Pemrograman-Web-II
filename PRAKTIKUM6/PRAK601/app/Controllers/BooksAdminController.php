<?php

namespace App\Controllers;

use \App\Models\booksModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class BooksAdminController extends BaseController
{
    public function index()
    {
        $books = new BooksModel();
        $data['bookses'] = $books->findAll();
        echo view('admin_list_books', $data);
    }

    //--------------------------------------------------------------------------

    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(
            [
                'judul' => 'required',
                'penulis' => 'required',
                'penerbit' => 'required',
                'tahun_terbit' => 'required|greater_than[1800]|less_than[2024]',
            ],
            [   // Errors
                'judul' => [
                    'required' => 'Judul harus diisi dengan string'
                ],
                'penulis' => [
                    'required' => 'Penulis harus diisi dengan string'
                ],
                'penerbit' => [
                    'required' => 'Penerbit harus diisi dengan string'
                ],
                'tahun_terbit' => [
                    'required' => 'Tahun Terbit tidak boleh kosong',
                    'greater_than' => 'Tahun Terbit tidak boleh kurang dari tahun 1800',
                    'less_than' => 'Tahun Terbit tidak boleh lebih dari tahun 2024'
                ]
            ]
        );

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data valid, simpan ke database
        if ($isDataValid) {
            $books = new BooksModel();
            $books->insert([
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "penerbit" => $this->request->getPost('penerbit'),
                "tahun_terbit" => $this->request->getPost('tahun_terbit'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect('admin/BooksController');
        }

        // tampilkan form create
        echo view('admin_create_books');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $books = new BooksModel();
        $data['books'] = $books->where('id', $id)->first();

        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules(
            [
                'judul' => 'required',
                'penulis' => 'required',
                'penerbit' => 'required',
                'tahun_terbit' => 'required|greater_than[1800]|less_than[2024]',
            ],
            [   // Errors
                'judul' => [
                    'required' => 'Judul harus diisi dengan string'
                ],
                'penulis' => [
                    'required' => 'Penulis harus diisi dengan string'
                ],
                'penerbit' => [
                    'required' => 'Penerbit harus diisi dengan string'
                ],
                'tahun_terbit' => [
                    'required' => 'Tahun Terbit tidak boleh kosong',
                    'greater_than' => 'Tahun Terbit tidak boleh kurang dari tahun 1800',
                    'less_than' => 'Tahun Terbit tidak boleh lebih dari tahun 2024'
                ]
            ]
        );

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if ($isDataValid) {
            $books->update($id, [
                "judul" => $this->request->getPost('judul'),
                "penulis" => $this->request->getPost('penulis'),
                "penerbit" => $this->request->getPost('penerbit'),
                "tahun_terbit" => $this->request->getPost('tahun_terbit'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect('admin/BooksController');
        }

        // tampilkan form edit
        echo view('admin_edit_books', $data);
    }

    //--------------------------------------------------------------------------

    public function delete($id)
    {
        $books = new BooksModel();
        $books->delete($id);
        return redirect('admin/BooksController');
    }
}