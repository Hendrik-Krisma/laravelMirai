<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public $table = 'tb_admin';

    protected $auditTimestamps = true;
    protected $fillable = [
        'id',
        'name',
        'username',
        'password',
    ];
}
