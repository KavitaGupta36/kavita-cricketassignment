<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
	protected $table = 'matches';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_team', 'second_team', 'winner', 'match_date',
    ];

    /**
     * get winner team 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getWinnerTeam(){
       return $this->hasOne('App\Team','id','winner');
    }

    /**
     * get First team Name
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getFirstTeam(){
       return $this->hasOne('App\Team','id','first_team');
    }

    /**
     * get Second team Neam
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getSecondTeam(){
       return $this->hasOne('App\Team','id','second_team');
    }
}
