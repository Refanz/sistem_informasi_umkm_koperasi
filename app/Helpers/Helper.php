<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Schema;

class Helper
{
    public static function getCountKolom($table_name)
    {
        return Schema::getColumnListing($table_name);
    }
}