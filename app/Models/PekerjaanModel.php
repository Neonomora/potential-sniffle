<?php
namespace App\Models;

use CodeIgniter\Model;

class PekerjaanModel extends Model
{
    protected $table = 'pekerjaan_utama';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tempat_kerja', 'nama_tempat', 'alamat',
        'provinsi', 'kabupaten', 'kecamatan', 'kategori_wilayah', 'main_id'
    ];
}