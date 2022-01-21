<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_id',
        'file_subject',
        'type_document',
        'letter_no',
        'letter_date',
        'letter_subject',
        'tsk_id',
        'tsk_date',
        'so_id',
        'so_date',
        'ar_id',
        'ar_date',
        'dr_id',
        'dr_date',
        'jr_id',
        'jr_date',
        'pr_id',
        'pr_date',
        'status',
        'disposal'
    ];
}
