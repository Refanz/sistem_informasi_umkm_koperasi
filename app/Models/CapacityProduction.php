<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapacityProduction extends Model
{
    use HasFactory;

    public function usaha()
    {
        return $this->belongsTo(Usaha::class, 'usaha_id');
    }
}
