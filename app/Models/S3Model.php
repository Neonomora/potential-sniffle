<?php
namespace App\Models;

use CodeIgniter\Model;

class S3Model extends Model
{
    protected $table = 's3';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'linear_non', 'program', 'tahun', 'no', 'tanggal',
        'institusi','pendidikan_id'
    ];
}
