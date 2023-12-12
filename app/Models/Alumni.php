<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $table = "alumni";
    public function angkatan(){
        return $this->belongsTo(Angkatan::class, 'angkatan_id', 'id');
    }
}
