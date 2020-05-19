<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookTransactions extends Model
{
    use SoftDeletes;

    public $incrementing = true;
    public $primaryKey   = 'id';

    protected $table = 'keywords';
    protected $guarded = ['id'];

    public function book_category(){
        return $this->belongsTo('App\Model\BookCategory', 'book_category_id', 'id');
    }

    public function books(){
        return $this->belongsTo('App\Model\Books', 'book_id', 'id');
    }
}
