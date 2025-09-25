<?php
namespace App\Models;

use CodeIgniter\Model;

class MainModel extends Model
{
    protected $table = 'main';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'ibu_kandung',
        'alamat_lengkap', 'agama', 'status', 'nomor_hp', 'nomor_wa', 'email', 'facebook',
        'twitter', 'pekerjaan_utama', 'pekerjaan_lain', 'alamat_kerja', 'jabatan', 'level',
        'gaji', 'pangkat', 'tmt', 'str_sip', 'pendidikan', 'dpd', 'dpc', 'akun', 'photo'
    ];
}