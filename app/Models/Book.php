<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $primaryKey = 'book_id';
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
      'book_title',
      'book_author',
      'book_genre',
      'book_price',
      'book_cover_img',
    ];
}
