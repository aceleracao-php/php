<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escritor extends Model
{
    use HasFactory;
    protected $connection = "pgsql";
    protected $table = "escritores";
    protected $fillable = ['nome', 'email', 'password'];
}
