<?php

namespace App;

trait HasPins
{
    public function pins()
    {
        return $this->hasMany(Comment::class, "pinner_id");
    }
}
