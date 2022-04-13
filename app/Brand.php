<?php

namespace App;

use App\Brand;
use App\Barang;
use App\Uom;
use App\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Brand extends Model
{
    use AutoNumberTrait;
    protected $table ='brands';
    protected $guarded = [];
    public function getAutoNumberOptions()
    {
        return [
            'kode_brand' => [
                'format' => function () {
                    return 'BRND/' . date('Ymd') . '/?';
                }, 'length' => 5
            ]

        ];
    }
}
