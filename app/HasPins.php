<?php

namespace App;

trait HasPins
{
    public function pins()
    {
        return $this->hasMany(Comment::class, "pinned_by");
    }
}
