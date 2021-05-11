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
     * Comicの全件を取得
     *
     * @return Collection
     */
    public function getComicList()
    {
        return $this->comic->all()
            ->map(function ($item, $key) {
                return [
                    'title' => $item->title,
                    'id' => $item->comic_no
                ];
            });
    }

    /**
     * Titleで対象レコードを取得
     *
     * @var string $title
     * @return Comic
     */
    public function getComicByTitle(String $title)
    {
        return $this->comic->where('title', '=', $title)->first();
    }

    /**
     * リクエストよりComicレコードの登録
     *
     * @var array $attributes
     * @return Comic
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
