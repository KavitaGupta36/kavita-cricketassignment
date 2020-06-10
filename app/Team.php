<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	protected $table = 'teams';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'logouri', 'club_state',
    ];

    /**
     * team players details
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getPlayers(){
        return $this->hasMany('App\Player','team_id','id');
    }
}
