<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class document_name extends Model
{
    protected $table = "document_name";
    public function loaitailieu(){
        return $this->belongsTo('App\document_type','id_DocumentType','id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
