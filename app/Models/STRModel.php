<?php
namespace App\Models;

use CodeIgniter\Model;

class STRModel extends Model
{
    protected $table = 'str';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'no', 'tanggal_mulai',
        'tanggal_akhir', 'str_sip_id'
    ];
}
