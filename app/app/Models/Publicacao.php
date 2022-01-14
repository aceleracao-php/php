<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    use HasFactory;
    protected $fillable = ["title", "resumo"];
    protected $connection = "pgsql";
    protected $table = "publicacoes";
    protected $primaryKey = "id";

    public function escritores(){
        return $this->belongsToMany(Escritor::class, "publicacoes_de_escritores", "publi_id", "esc_id");    
    }
}
