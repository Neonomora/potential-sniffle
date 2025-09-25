<?php
namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\KategoriModel;

class Produk extends BaseController
{
    public function create()
    {
        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->findAll();

        return view('produk/create', $data);
    }

    public function store()
    {
        $produkModel = new ProdukModel();

        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga' => $this->request->getPost('harga'),
            'kategori_id' => $this->request->getPost('kategori_id'),
        ];

        $produkModel->insert($data);

        return redirect()->to('/produk/create')->with('success', 'Produk berhasil ditambahkan.');
    }
}
