<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class document_type extends Model
{
    //
    protected $table = "document_type";
    public function tailieu(){
        return $this->hasMany('App\document_name','id_DocumentType','id');
    }

}
