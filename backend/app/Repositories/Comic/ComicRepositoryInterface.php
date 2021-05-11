<?php

namespace App\Repositories\Comic;

use App\Models\Comic;

interface ComicRepositoryInterface
{
    /**
     * Comicの全件を取得
     *
     * @return Collection
     */
    public function getComicList();

    /**
     * Titleで対象レコードを取得
     *
     * @var string $title
     * @return Comic
     */
    public function getComicByTitle(String $title): Comic;

    /**
     * リクエストよりComicレコードの登録
     *
     * @var  array $attributes
     * @return Comic
     */
    public function createComic(Array $attributes): Comic;
}