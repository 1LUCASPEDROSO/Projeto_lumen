<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Mime\Email;

class user extends Model
{
    protected $fillable =['nome','email'];
}
