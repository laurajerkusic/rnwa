<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salaries';

    protected $primaryKey = 'from_date';

    protected $fillable = [
        'emp_no', 'salary', 'from_date', 'to_date'
    ];

    protected $dates = [
        'from_date', 'to_date'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'emp_no', 'emp_no');
    }
}
