<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    protected $table = 'comics';
    protected $dates =  ['created_at', 'updated_at'];
    protected $fillable = ['id', 'title', 'comic_no', 'url'];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
