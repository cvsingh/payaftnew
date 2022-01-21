<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymaster extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'basic_pay',
        'da_flag',
        'hospitaliy_allowance',
        'hra',
        'tpt',
        'orderly_allowance',
        'employer_contribution_epf',
        'cashier_allowance_flag',
        'medical_allowance_flag',
        'arrears',
        'pension',
        'da_pension',
        'debit_eol',
        'gpf',
        'cghs',
        'cgeis',
        'employee_contribution_epf',
        'insurance',
        'incometax',
        'cess'
    ];
}
