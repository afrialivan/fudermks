<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function menu() {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
    public function catering() {
        return $this->belongsTo(Catering::class, 'id_catering');
    }
}
