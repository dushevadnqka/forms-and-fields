<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model {

    protected $table = 'forms';

    protected $fillable = ['name'];
    
    /**
     * The field that belong to the forms.
     */
    public function fields()
    {
        return $this->belongsToMany('App\Field','field_form');
    }

}
