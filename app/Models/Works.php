<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $table = 'works';
    protected $fillable = ['title', 'description', 'preview', 'link'];
    public $timestamps = false;
}
