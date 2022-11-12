<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $table = 'tbl_customers';
    
    protected $fillable = [
        'firstname',
        'middleinitial',
        'lastname',
        'co_firstname',
        'co_middleinitial',
        'co_lastname',
        'daterelease',
        'loanamount',
        'loanpercent',
        'loanperiod',
        'loanmethod',
        'totalamount',
        'paymentrate'
    ];
}
