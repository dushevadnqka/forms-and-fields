<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model {

    protected $table = 'fields';
    protected $fillable = ['label', 'type_id', 'length', 'required'];

    /**
     * The types.
     */
    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    /**
     * The forms that belong to the field.
     */
    public function forms()
    {
        return $this->belongsToMany('App\Forms', 'field_form');
    }

}
