<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function catering() {
        return $this->belongsTo(Catering::class, 'id_catering');
    }

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'id_categori');
    }

}
