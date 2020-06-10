<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
	protected $table = 'points';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id', 'matches_played', 'win', 'loss',
    ];

    /**
     * team details
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getTeamDetails(){
        return $this->belongsTo('App\Team','team_id','id');
    }
}
