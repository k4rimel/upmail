<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'mail';


    public function messages()
    {
        return $this->belongsToMany('App\Models\Message','mail_messages','mail_id','message_id');
    }
}