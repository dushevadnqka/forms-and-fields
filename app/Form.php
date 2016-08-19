<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model {

    protected $table = 'forms';

    //protected $fillable = ['forename', 'surname', 'email', 'created'];

    /**
     * The field that belong to the forms.
     */
    public function fields()
    {
        return $this->belongsToMany('App\Field');
    }

}
