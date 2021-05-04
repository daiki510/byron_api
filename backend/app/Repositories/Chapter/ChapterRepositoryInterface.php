<?php

namespace App\Repositories\Chapter;

interface ChapterRepositoryInterface
{
    /**
     * comic_idで対象漫画の最新話を取得
     *
     * @var integer $comic_id
     * @return object
     */
    public function getLatestChapter(Int $comic_id);

    /**
     * リクエストよりchapterレコードの登録
     *
     * @var request $request
     * @return object
     */
    public function createLatestChapters(Request $request, Comic $comic);
}