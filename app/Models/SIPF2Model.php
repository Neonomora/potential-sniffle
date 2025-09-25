<?php
namespace App\Models;

use CodeIgniter\Model;

class SIPF2Model extends Model
{
    protected $table = 'sipf2';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'no', 'tmt', 'str_sip_id'
    ];
}
