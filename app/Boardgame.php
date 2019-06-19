<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boardgame extends Model
{
    //

    public function publisher() {
        return $this->belongsTo('App\Publisher');
    }
}
