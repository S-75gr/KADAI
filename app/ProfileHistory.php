<?php

namespace ONEPIECE;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    protected $table = 'profile_histories';
    protected $guarded = array('id');
    
    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
        );
}
