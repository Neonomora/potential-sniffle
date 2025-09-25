<?php
namespace App\Models;

use CodeIgniter\Model;

class NamaModel extends Model
{
    protected $table = 'nama';
    protected $primaryKey = 'id';
    protected $allowedFields = ['gelar_depan', 'gelar_belakang', 'main_id'];
}
