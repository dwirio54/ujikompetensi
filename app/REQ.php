<?php

namespace App;
use App\Brand;
use App\Barang;
use App\Uom;
use App\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class REQ extends Model
{
    use AutoNumberTrait;

    protected $table ='requests';
    protected $guarded = [];
    public function getAutoNumberOptions()
    {
        return [
            'kode_request' => [
                'format' => function () {
                    return 'REQ/' . date('Ymd') . '/?';
                }, 'length' => 5
            ]

        ];
    }
}
