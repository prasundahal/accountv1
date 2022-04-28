<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpinnerWinner extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $fillable = [

        'full_name', 'number','email','intervals','mail','count','note','r_id','game_id','status'

    ];
}
