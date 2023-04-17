<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $primaryKey = 'dept_no';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'dept_no',
        'dept_name',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
