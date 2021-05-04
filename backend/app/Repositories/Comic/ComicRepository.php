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
     * @var request $request
     * @return object
     */
    public function createComic(Request $request)
    {
        return $this->comic->create([
          'title' => $request['title'],
          'comic_no' => $request['comicNo'],
          'url' => $request['comicUrl'],
        ]);
    }
}
