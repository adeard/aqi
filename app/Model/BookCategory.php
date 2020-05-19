<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookCategory extends Model
{
    use SoftDeletes;

    public $incrementing = true;
    public $primaryKey   = 'id';

    protected $table = 'book_category';
    protected $guarded = ['id'];

    public function book_transactions(){
        return $this->hasMany('App\Model\BookTransactions', 'book_category_id', 'id');
    }
}
