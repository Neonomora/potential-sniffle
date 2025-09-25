<?php
namespace App\Models;

use CodeIgniter\Model;

class D3Model extends Model
{
    protected $table = 'd3';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tahun', 'no', 'tanggal',
        'institusi','pendidikan_id'
    ];
}
