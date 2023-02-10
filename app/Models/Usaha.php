<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usaha extends Model
{
    use HasFactory;

    protected $table = 'jobs';
    protected $guarded = ['id'];

    public function pemilik()
    {
        return $this->belongsTo(Pemilik::class, 'owner_id');
    }
}
