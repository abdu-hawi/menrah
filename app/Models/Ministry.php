<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'CASE_NO',
        'DIVISION_NAME',
        'RECEIVE_DIVISION_NAME',
        'REG_DATE',
        'REFERRAL_STATUS_DATE',
        'SEND_DIVISION_NAME',
        'SESSION_DATE_FIRST',
        'SESSIONS_INSDAT_FIRST',
        'DEFENDANT',
        'PLAINTIFFS',
    ];
}
