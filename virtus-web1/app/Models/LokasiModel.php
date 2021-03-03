<?php

namespace App\Models;

use CodeIgniter\Model;

class LokasiModel extends Model
{
    protected $table = 'data_area';
    protected $primaryKey = 'Nama_area';
    protected $allowedFields = ['persentase_tidur', 'persentase_ngantuk', 'persentase_kerja'];
}
