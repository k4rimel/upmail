<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    protected $table = 'messages';


    public function users()
    {
        return $this->belongsToMany('App\Models\User','mail_messages','message_id','mail_id');
    }   


    public function Files()
    {
        return $this->belongsToMany('App\Models\File');
    }    

}