<?php

namespace App;
use App\Brand;
use App\Barang;
use App\Uom;
use App\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;


class Uom extends Model
{
    use AutoNumberTrait;
    protected $table ='uoms';
    protected $guarded = [];
    public function getAutoNumberOptions()
    {
        return [
            'kode_uom' => [
                'format' => function () {
                    return 'ST/' . date('Ymd') . '/?';
                }, 'length' => 5
            ]

        ];
    }
}
