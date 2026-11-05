<?php

namespace App\Other;

trait HasFavorite
{
    public function pins()
    {
        return $this->hasMany(\App\Comment::class);
    }
}

// cg-33.11 d3: touch every file
