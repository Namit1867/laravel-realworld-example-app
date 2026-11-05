<?php

namespace App\Services;

use App\Article;

class Slugger
{
    public function forArticle(Article $article): string
    {
        return str_slug($article->title) . '-' . $article->readingMinutes();
    }
}
