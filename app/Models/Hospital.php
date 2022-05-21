<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = ['hname','registration','trade','ownername','email','phone','address','password','city','requirments'];
    protected $casts = [ 'requirments' => 'array' ];
}
