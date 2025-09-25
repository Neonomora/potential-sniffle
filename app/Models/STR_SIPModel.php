<?php
namespace App\Models;

use CodeIgniter\Model;

class STR_SIPModel extends Model
{
    protected $table = 'str_sip';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'str', 'sipf1', 'sipf2', 'sipm1', 'sipm2', 'main_id'
    ];
}
