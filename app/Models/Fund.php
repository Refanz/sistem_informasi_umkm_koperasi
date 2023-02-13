<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    use HasFactory;

    protected $table = "funds";

    public function usaha()
    {
        return $this->belongsTo(Usaha::class, 'usaha_id');
    }
}
