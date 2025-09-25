<?php
namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table = 'pendidikan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'sprg', 'd3', 'd4_s1', 's2', 's3', 'main_id'
    ];
}
