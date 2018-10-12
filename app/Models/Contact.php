<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['title', 'email', 'tel', 'address', 'facebook', 'linkedin'];
    public $timestamps = false;
}
