<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Books extends Model
{
    // use SoftDeletes;

    public $incrementing = true;
    public $primaryKey   = 'id';

    protected $table = 'books';
    protected $guarded = ['id'];

    public function book_transactions(){
        return $this->hasMany('App\Model\BookTransactions', 'book_id', 'id');
    }

    public function keywords(){
        return $this->hasMany('App\Model\Keywords', 'book_id', 'id');
    }
}
