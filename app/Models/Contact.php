<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id',
        'user_id',
        'contact_string'
    ];

    public $timestamps = true;
    protected $hidden = ['pivot'];


    public function card(){
        return $this->belongsToMany(Card::class,'card_contacts','contact_id');
    }
}
