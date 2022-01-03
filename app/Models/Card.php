<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName ',
        'middleName ',
        'lastName ',
        'email',
        'password',
        'profile_img',
        'login_criteria',
        'login_id'
    ];
    public $timestamps = true;

}
