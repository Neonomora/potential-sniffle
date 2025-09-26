<?php
namespace App\Controllers;

use App\Models\AkunModel;
use App\Models\MainModel;
use App\Models\NamaModel;
use App\Models\AlamatModel;
use App\Models\JabatanModel;
use App\Models\PekerjaanLModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\STR_SIPModel;

class Main extends BaseController
{
    public function index()
    {
        return view('main/index');
    }

    public function store()
    {
        $mainModel = new MainModel();
        $namaModel = new NamaModel();
        $alamatModel = new AlamatModel();
        $pekerjaanModel = new PekerjaanModel();
        $pekerjaanLModel = new PekerjaanLModel();
        $jabatanModel = new JabatanModel();
        $str_sipModel = new STR_SIPModel();
        $pendidikanModel = new PendidikanModel();
        $akunModel = new AkunModel();

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

        $pekerjaanData = [
            'tempat_kerja' => $this->request->getPost('tempat_kerja'),
            'nama_tempat' => $this->request->getPost('nama_tempat'),
            'alamat' => $this->request->getPost('alamat'),
            'provinsi' => $this->request->getPost('provinsi'),
            'kabupaten' => $this->request->getPost('kabupaten'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kategori_wilayah' => $this->request->getPost('kategori_wilayah'),
            'main_id' => $mainId,
        ];

        $pekerjaanLData = [
            'alamat' => $this->request->getPost('alamat'),
            'main_id' => $mainId,
        ];

        $jabatanData = [
            'asn' => $this->request->getPost('asn'),
            'non_asn' => $this->request->getPost('non_asn'),
            'pemberi_layanan' => $this->request->getPost('pemberi_layanan'),
            'main_id' => $mainId,
        ];

        $str_sipData = [
            'str' => $this->request->getPost('str'),
            'sipf1' => $this->request->getPost('sipf1'),
            'sipf2' => $this->request->getPost('sipf2'),
            'sipm1' => $this->request->getPost('sipm1'),
            'sipm2' => $this->request->getPost('sipm2'),
            'main_id' => $mainId,
        ];

        $pendidikanData = [
            'sprg' => $this->request->getPost('sprg'),
            'd3' => $this->request->getPost('d3'),
            'd4_s1' => $this->request->getPost('d4_s1'),
            's2' => $this->request->getPost('s2'),
            's3' => $this->request->getPost('s3'),
            'main_id' => $mainId,
        ];

        $akunData = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'main_id' => $mainId,
        ];

        $alamatModel->insert($alamatData);
        $namaModel->insert($namaData);
        $pekerjaanModel->insert($pekerjaanData);
        $pekerjaanLModel->insert($pekerjaanLData);
        $jabatanModel->insert($jabatanData);
        $str_sipModel->insert($str_sipData);
        $pendidikanModel->insert($pendidikanData);
        $akunModel->insert($akunData);

        return redirect()->to('/main')->with('success', 'Data berhasil ditambahkan.');
    }
}