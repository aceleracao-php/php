<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtigoPgsql extends Model
{
    use HasFactory;

    protected $fillable = ["title", "resumo", "content", "id_revista"];
    protected $connection = "pgsql";
    protected $table = "artigos";

    //hasOne
    //belongsTo

    public function revista(){
        //return $this->belongsTo(Revista::class, 'id_revista', 'id');
        return $this->hasOne(Revista::class, 'id_revista', 'id');
    }
}
