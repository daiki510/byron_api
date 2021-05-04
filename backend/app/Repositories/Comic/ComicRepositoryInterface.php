<?php

namespace App\Repositories\Comic;

interface ComicRepositoryInterface
{
    /**
     * Titleで対象レコードを取得
     *
     * @var string $title
     * @return object
     */
    public function getComicByTitle(String $title);

    /**
     * リクエストよりComicレコードの登録
     *
     * @var Request $request
     * @return object
     */
    public function createComic(Request $request);
}