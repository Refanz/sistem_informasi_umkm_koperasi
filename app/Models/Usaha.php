<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usaha extends Model
{
    use HasFactory;

    protected $table = 'jobs';
    protected $guarded = [''];
    public $incrementing = false;

    public function pemilik()
    {
        return $this->belongsTo(Pemilik::class, 'owner_id');
    }

    public function fund()
    {
        return $this->hasMany(Fund::class, 'jobs_id');
    }

    public function asset()
    {
        return $this->hasMany(Asset::class);
    }

    public function worker()
    {
        return $this->hasMany(Worker::class);
    }

    public function capacityProduction()
    {
        return $this->hasMany(CapacityProduction::class);
    }
}
