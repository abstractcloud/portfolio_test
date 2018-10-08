<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceHeader extends Model
{
    protected $table = 'service_header';
    protected $fillable = ['title', 'description'];
    public $timestamps = false;
}
