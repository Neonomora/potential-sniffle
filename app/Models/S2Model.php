<?php
namespace App\Models;

use CodeIgniter\Model;

class S2Model extends Model
{
    protected $table = 's2';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tahun', 'no', 'tanggal',
        'institusi','pendidikan_id'
    ];
}
