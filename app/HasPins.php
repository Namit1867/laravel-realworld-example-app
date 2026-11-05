<?php

namespace App;

trait HasPins
{
    public function pins()
    {
        return $this->hasMany(Comment::class, "pinner_id");
    }
}

// cg-33.11 d3: touch every file
