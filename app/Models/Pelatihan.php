<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Pelatihan extends Model
{
    use HasFactory;

    protected $table = 'trainings';
    protected $guarded = ['id'];
    protected $with = ['pemilik'];


    public function pemilik()
    {
        return $this->belongsTo(Pemilik::class, 'owner_id');
    }
}
