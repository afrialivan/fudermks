<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catering extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function menu() {
        return $this->hasMany(Menu::class, 'id_menu');
    }

    public function pesanan() {
        return $this->hasMany(Pesanan::class);
    }

}
