<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $table = 'providers';

    protected $fillable = [
        'txtTitle',
        'txtFn',
        'txtMn',
        'txtLn',
        'txtPe',
        'txtSe',
        'txtPp',
        'txtSn',
        'txtWa',
        'txtAo',
        'txtAt',
        'txtCity',
        'txtState',
        'country',
        'txtZc',
        'txtPc',
        'txtCd',
        'txtSpcl1',
        'txtBc',
        'dateBce1',
        'txtBc2',
        'dateBce2',
        'txtBc3',
        'dateBce3',
        'txtBc4',
        'txtEmp',
        'txtHp',
        'txtOp',
        'txtLan',
        'txtGen',
        'txtEth',
        'txtCoi',
        'txtAd',
        'txtAh',
        'txtOai',
        'txtHow',
        'txtContactMeth',
        'txtComm',
    ];
    
}