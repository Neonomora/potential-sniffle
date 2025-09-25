<?php
namespace App\Models;

use CodeIgniter\Model;

class D4_S1Model extends Model
{
    protected $table = 'd4_s1';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tahun', 'no', 'tanggal',
        'institusi','pendidikan_id'
    ];
}
