<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'user_id';
    protected $allowedFields    = [
        'user_id', 'nama', 'email', 'image', 'password', 'role_id', 'is_active', 'tanggal_input'
    ];
}
