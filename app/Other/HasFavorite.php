<?php

namespace App\Other;

trait HasFavorite
{
    public function pins()
    {
        return $this->hasMany(\App\Comment::class);
    }
}
