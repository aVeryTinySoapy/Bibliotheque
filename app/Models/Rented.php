<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rented extends Model
{
    use HasFactory, HasUuids;

    protected $table = "rented";
    protected $primaryKey = 'rent_id';
    public $timestamps = false;
    protected $fillable = [
        'book_id',
        'user_id',
        'rent_date',
        'rent_due'
    ];
}
