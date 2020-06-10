<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $table = 'players';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'image_uri', 'player_jersey_no', 'country', 'matches', 'runs', 'highest_score', 'fifties', 'hundreds',
    ];
    
}
