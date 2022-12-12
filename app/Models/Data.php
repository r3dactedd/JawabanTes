<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'productId',
        'productName',
        'amount',
        'customerName',
        'status',
        'transactionDate',
        'createBy',
        'createOn'
    ];


    public function status()
    {
        return $this->hasOne(status::class);
    }
}
