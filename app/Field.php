<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model {

    protected $table = 'fields';

    //protected $fillable = ['forename', 'surname', 'email', 'created'];

    /**
     * The forms that belong to the field.
     */
    public function forms()
    {
        return $this->belongsToMany('App\Forms');
    }

}
