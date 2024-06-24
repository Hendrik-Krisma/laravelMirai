<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $table = 'tborder';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $auditTimestamps = true;

    protected $casts = [
        'orderDate' => 'datetime:Y-m-d',
        
    ];

    public $fillable = [
        'id',
        'paymentType',
        'paymentStatus',
        'productList',
        'orderDate',
        'orderTotal',
    ];
}
