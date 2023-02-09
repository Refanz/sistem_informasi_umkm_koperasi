<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
