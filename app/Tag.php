<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Tag extends Model
{
    /**
     * The posts that belong to the tag.
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
