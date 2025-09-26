<?php
namespace App\Models;

use CodeIgniter\Model;

class PekerjaanLModel extends Model
{
    protected $table = 'pekerjaan_lain';
    protected $primaryKey = 'id';
    protected $allowedFields = [
       'alamat', 'main_id'
    ];
}