<?php

namespace App\Repositories\Comic;

use App\Models\Comic;

class ComicRepository implements ComicRepositoryInterface
{
    protected $comic;

    /**
    * @param object $comic
    */
    public function __construct(Comic $comic)
    {
        $this->comic = $comic;
    }

    /**
     * Titleで対象レコードを取得
     *
     * @var string $title
     * @return object
     */
    public function getComicByTitle(String $title)
    {
        return $this->comic->where('title', '=', $title)->first();
    }

    /**
     * リクエストよりComicレコードの登録
     *
     * @var array $attributes
     * @return object
     */
    public function createComic(Array $attributes)
    {
        return $this->comic->create([
            'title' => $attributes['title'],
            'comic_no' => $attributes['comicNo'],
            'url' => $attributes['comicUrl'],
        ]);
    }
}
