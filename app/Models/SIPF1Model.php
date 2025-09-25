<?php
namespace App\Models;

use CodeIgniter\Model;

class SIPF1Model extends Model
{
    protected $table = 'sipf1';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'no', 'tmt', 'str_sip_id'
    ];
}
