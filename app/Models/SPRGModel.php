<?php
namespace App\Models;

use CodeIgniter\Model;

class SPRGModel extends Model
{
    protected $table = 'sprg';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'tahun', 'no', 'tanggal',
        'institusi','pendidikan_id'
    ];
}
