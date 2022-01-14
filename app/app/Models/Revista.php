<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revista extends Model
{
    use HasFactory;

    protected $fillable = ["nome", "edicao", "ano", "tema", "views"];
    protected $connection = "pgsql";

    public function artigos(){
        return $this->hasMany(ArtigoPgsql::class, 'id_revista', 'id');
    }
}
