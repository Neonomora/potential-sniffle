<?php
namespace App\Controllers;

use App\Models\MainModel;
use App\Models\NamaModel;
use App\Models\AlamatModel;

class Main extends BaseController
{
    public function create()
    {
        return view('main/create');
    }

    public function store()
    {
        $mainModel = new MainModel();
        $namaModel = new NamaModel();
        $alamatModel = new AlamatModel();

        $validation = \Config\Services::validation();
        $validation->setRules([
            'nik' => 'required|numeric|is_unique[main.nik]',
            'nama' => 'required',
                'gelar_depan' => 'permit_empty',
                'gelar_belakang' => 'permit_empty',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|valid_date[Y-m-d]',
            'jenis_kelamin' => 'required|in_list[Laki-laki,Perempuan]',
            'ibu_kandung' => 'required',
            'alamat_lengkap' => 'required',
                'provinsi' => 'required',
                'kabupaten' => 'required',
                'kecamatan' => 'required',
                'kelurahan' => 'required',
                'rt_rw' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'nomor_hp' => 'required|numeric',
            'nomor_wa' => 'required|numeric',
            'email' => 'required|valid_email',
            // field lainnya bisa dibuat optional atau disesuaikan jika mau validasi
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $mainData = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'ibu_kandung' => $this->request->getPost('ibu_kandung'),
            'alamat_lengkap' => $this->request->getPost('alamat_lengkap'),
            'agama' => $this->request->getPost('agama'),
            'status' => $this->request->getPost('status'),
            'nomor_hp' => $this->request->getPost('nomor_hp'),
            'nomor_wa' => $this->request->getPost('nomor_wa'),
            'email' => $this->request->getPost('email'),
            'facebook' => $this->request->getPost('facebook'),
            'twitter' => $this->request->getPost('twitter'),
            'pekerjaan_utama' => $this->request->getPost('pekerjaan_utama'),
            'pekerjaan_lain' => $this->request->getPost('pekerjaan_lain'),
            'alamat_kerja' => $this->request->getPost('alamat_kerja'),
            'jabatan' => $this->request->getPost('jabatan'),
            'level' => $this->request->getPost('level'),
            'gaji' => $this->request->getPost('gaji'),
            'pangkat' => $this->request->getPost('pangkat'),
            'tmt' => $this->request->getPost('tmt'),
            'str_sip' => $this->request->getPost('str_sip'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'dpd' => $this->request->getPost('dpd'),
            'dpc' => $this->request->getPost('dpc'),
            'akun' => $this->request->getPost('akun'),
            'photo' => $this->request->getPost('photo'),
        ];

        $mainModel->insert($mainData);
        $mainId = $mainModel->getInsertID();

        $alamatData = [
            'provinsi' => $this->request->getPost('provinsi'),
            'kabupaten' => $this->request->getPost('kabupaten'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kelurahan' => $this->request->getPost('kelurahan'),
            'rt_rw' => $this->request->getPost('rt_rw'),
            'main_id' => $mainId,
        ];
        
        $namaData = [
            'gelar_depan' => $this->request->getPost('gelar_depan'),
            'gelar_belakang' => $this->request->getPost('gelar_belakang'),
            'main_id' => $mainId,
        ];

        $alamatModel->insert($alamatData);
        $namaModel->insert($namaData);

        return redirect()->to('/main/create')->with('success', 'Data berhasil ditambahkan.');
    }
}