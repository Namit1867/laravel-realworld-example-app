<?php

namespace App\RealWorld\Transformers;

class TagTransformer extends Transformer
{
    protected $resourceName = 'tag';

    public function transform($data)
    {
        return $data;
    }
}
// cg-33.11 d3: touch every file
