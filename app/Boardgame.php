<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boardgame extends Model
{
    //Used to help with creating user submitted data for the table.
    protected $fillable = [
        'title', 'slug', 'min_players', 'max_players', 'min_age', 'min_duration', 'max_duration', 'publisher_id', 'release_year', 'rating',
    ];

    //The Model for Boardgame, the following function links publisher to this Model,
    //so it knows which boardgame belongs to who.
    public function publisher() {
        return $this->belongsTo('App\Publisher');
    }
}
