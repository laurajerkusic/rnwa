<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $primaryKey = 'emp_no';

    public $incrementing = false;

    protected $fillable = ['emp_no', 'birth_date', 'first_name', 'last_name', 'gender', 'hire_date'];

    protected $dates = ['birth_date', 'hire_date'];

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'dept_emps', 'emp_no', 'dept_no')->withPivot('from_date', 'to_date');
    }
}
