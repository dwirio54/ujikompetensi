<?php

namespace App;

use App\Brand;
use App\Barang;
use App\Uom;
use App\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Barang extends Model
{
    use AutoNumberTrait;
    protected $table ='barangs';
    protected $guarded = [];
    public function getAutoNumberOptions()
    {
        return [
            'kode_barang' => [
                'format' => function () {
                    return 'BRG/' . date('Ymd') . '/?';
                }, 'length' => 5
            ]
        ];
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function uom()
    {
        return $this->belongsTo(Uom::class, 'uom_id');
    }
    public function user()
    {
        return $this->belongsTo(Uom::class);
    }

    public function req()
    {
        return $this->belongsTo(Req::class, 'request_id');
    }
}
