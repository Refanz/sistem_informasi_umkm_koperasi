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
        $tabel = Helper::checkTable($model);

        if (is_null($tabel)) {
            return 1;
        }

        return $model->latest()->first()->id + 1;
    }

    public static function getDataKelurahan(Model $model)
    {
        $data_kelurahan = $model::select('kelurahan_pemilik')
                                    ->distinct()
                                    ->get();

        return $data_kelurahan;
    }
}