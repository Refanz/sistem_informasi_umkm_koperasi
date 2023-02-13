<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Helper
{
    public static function getCountKolom($table_name)
    {
        return Schema::getColumnListing($table_name);
    }

    public static function checkTable(Model $model)
    {
        return $model->first();
    }

    public static function getLastIdFromTable(Model $model)
    {
        return $model->latest()->first()->id + 1;
    }
}