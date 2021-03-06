<?php

namespace App\Models;

use CodeIgniter\Model;

class ServicesModel extends Model
{
    protected $table = 'services';
    protected $allowedFields = ['judul_service', 'slug', 'jenis_service', 'gambar', 'kutipan', 'deskripsi'];
    protected $primaryKey = 'id';


    public function getServices($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        } else {
            return $this->Where(['slug' => $slug])->first();
        }
    }
}
