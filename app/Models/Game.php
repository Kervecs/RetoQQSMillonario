<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    
    protected $table  = "game";

    protected $primaryKey = "id_game";


    protected $fillable = ['user_id','categoria_id','pregunta_id','respuesta_id'];

    protected $hidden = ['id_game'];
}
