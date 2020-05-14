<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function cotegories() {
        return $this->BelongsToMany('App\Category');
    }
}
