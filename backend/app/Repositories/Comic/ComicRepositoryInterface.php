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
     * @var  array $attributes
     * @return object
     */
    public function createComic(Array $attributes);
}