<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcomments extends Model
{
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
