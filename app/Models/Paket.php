<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'paket_penjualan';

    protected $fillable = [
        'nama',
        'harga',
    ];

    public function customers() 
    {
        return $this->hasMany(Customer::class);
    }
}
