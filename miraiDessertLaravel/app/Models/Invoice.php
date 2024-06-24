<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    
    public $table = 'tb_invoices';

    const CREATED_AT ='created_at';
    const UPDATED_AT ='updated_at';
    protected $auditTimestamps = true;

    protected $casts = [
        'issueDate' => 'datetime:Y-m-d',
        'dueDate' => 'datetime:Y-m-d',
        
    ];
    protected $fillable = [
        'id',
        'orderID',
        'issueDate',
        'dueDate',
        'paid',
    ]; 
}
