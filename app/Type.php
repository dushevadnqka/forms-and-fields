<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';
    
    protected $fillable = ['type_name'];
    
    /**
     * The types.
     */
    public function fields()
    {
        return $this->hasMany('App\Field');
    }
}
