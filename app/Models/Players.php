<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $fillable = ['player_id', 'ign', 'level', 'current_rank', 'highest_rank'];

    /** @use HasFactory<\Database\Factories\PlayersFactory> */
    use HasFactory;
}
