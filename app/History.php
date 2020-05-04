<?php

namespace ONEPIECE;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $guarded = array('id');
        
    public static $rules = array(
        'news_id' => 'required',
        'edited_at' => 'required',
    );
    
    //ProfileHistoryモデルに関連付けを行う。
    public function ProfileHistory()
    {
        return $this->hasMany('ONEPIECE\ProfileHistory');
    }
}
