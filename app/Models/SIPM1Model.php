<?php
namespace App\Models;

use CodeIgniter\Model;

class SIPM1Model extends Model
{
    protected $table = 'sipm1';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'no', 'tmt', 'str_sip_id'
    ];
}
