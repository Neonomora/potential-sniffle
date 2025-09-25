<?php
namespace App\Models;

use CodeIgniter\Model;

class SIPM2Model extends Model
{
    protected $table = 'sipm2';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'no', 'tmt', 'str_sip_id'
    ];
}
