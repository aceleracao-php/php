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
    protected $primaryKey = 'id';

    public function publicacoes(){
        return $this->belongsToMany(Publicacao::class, "publicacoes_de_escritores", "esc_id", "publi_id");    
    }
}