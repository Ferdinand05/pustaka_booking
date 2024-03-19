<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPinjam extends Model
{
    protected $table            = 'pinjam';
    protected $primaryKey       = 'no_pinjam';
    protected $allowedFields    = ['no_pinjam', 'tgl_pinjam', 'id_booking', 'id_user', 'tgl_kembali', 'tgl_pengembalian', 'status', 'total_denda'];
}
