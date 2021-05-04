<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $table = 'chapters';
    protected $dates =  ['created_at', 'updated_at'];
    protected $fillable = [
        'id',
        'comic_id',
        'comic_no',
        'chapter_no',
        'chapter_url',
        'chapter_title'
    ];

    public function comic()
    {
        return $this->belongsTo(Comic::class);
    }
}
