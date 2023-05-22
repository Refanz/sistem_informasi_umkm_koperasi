<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $with = ['usaha'];

    protected $guarded = ['id'];

    public function usaha()
    {
        return $this->belongsTo(Usaha::class, 'jobs_id');
    }
}
