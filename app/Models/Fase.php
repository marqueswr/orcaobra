<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    use HasFactory;
    protected $table = 'fases';
    protected $fillable = ['etapa_id','servico_id'];


    public function servico()
    {
        return $this->belongsTo(Servico::class,'servico_id');
    }

    public function etapa()
    {
        return $this->belongsTo(Etapa::class,'etapa_id');
    }

}
