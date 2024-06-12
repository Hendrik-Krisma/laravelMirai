<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
<<<<<<< HEAD
    public $table = 'tborder';

    const CREATED_AT ='created_at';
    const UPDATED_AT ='updated_at';
    protected $auditTimestamps = true;
    protected $fillable = [
        'id',
        'paymentType',
        'paymentStatus',
        'productList',
        'orderDate',
        'orderTotal',
    ];
}


=======

    public $table = 'tborder';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $auditTimestamps = true;

    public $fillable = [
        'id',
        'code',
    ];
}
>>>>>>> d5517245af1960533329bb9048d20ab12bf3ae00
