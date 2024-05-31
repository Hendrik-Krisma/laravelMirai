<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $table = 'barang';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $auditTimestamps = true;
    public $fillable = [
        'id',
        'customerID',
        'productID',
        'paymentType',
        'paymentStatus',
        'product.ist',
        'orderDate',
        'orderTotal'
    ];
}
