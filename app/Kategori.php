<?php

namespace App;

use App\Brand;
use App\Barang;
use App\Uom;
use App\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Kategori extends Model
{
    use AutoNumberTrait;
    protected $table ='kategoris';
    protected $guarded = [];
    public function getAutoNumberOptions()
    {
        return [
            'kode_kategori' => [
                'format' => function () {
                    return 'KTG/' . date('Ymd') . '/?';
                }, 'length' => 5
            ]

        ];
    }
}
