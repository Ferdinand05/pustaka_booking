<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBuku extends Model
{
    protected $table            = 'buku';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id', 'judul_buku', 'id_kategori', 'pengarang', 'penerbit', 'tahun_terbit', 'isbn', 'stok', 'dipinjam', 'dibooking', 'image'];
}
