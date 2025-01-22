<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    //
    use HasFactory;
    protected $table = 'instructors';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone_number',
        'profile_url'
    ];
    public $timestamps = true;
}
