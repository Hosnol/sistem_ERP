<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'no_tlp',
        'alamat',
        'foto_ktp_path',
        'foto_rumah_path',
        'sales_id',
        'paket_id',
        'verified',
    ];

    public function sales()
{
    return $this->belongsTo(User::class, 'sales_id');
}

public function paket()
{
    return $this->belongsTo(Paket::class, 'paket_id');
}
}
