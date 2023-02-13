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

    public function funds()
    {
        return $this->hasMany(Fund::class, 'jobs_id');
    }

    public function assets()
    {
        return $this->hasMany(Asset::class, 'jobs_id');
    }

    public function workers()
    {
        return $this->hasMany(Worker::class);
    }

    public function capacityProductions()
    {
        return $this->hasMany(CapacityProduction::class);
    }
}
