<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'album', 'artist', 'slug'];

    public static function generateSlag($title)
    {

        $song_slug = Str::slug($title);
        return $song_slug;
    }
}
