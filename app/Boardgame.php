<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boardgame extends Model
{
    //The Model for Boardgame, the following function links publisher to this Model,
    //so it knows which boardgame belongs to who.

    public function publisher() {
        return $this->belongsTo('App\Publisher');
    }
}
