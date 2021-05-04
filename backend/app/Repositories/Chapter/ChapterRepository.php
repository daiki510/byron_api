<?php

namespace App\Repositories\Chapter;

use App\Models\Chapter;

class ChapterRepository implements ChapterRepositoryInterface
{
    protected $chapter;

    /**
    * @param object $chapter
    */
    public function __construct(Chapter $chapter)
    {
        $this->chapter = $chapter;
    }

    /**
     * comic_idで対象漫画の最新話を取得
     *
     * @var integer $comic_id
     * @return object
     */
    public function getLatestChapter(Int $comic_id)
    {
        return $this->chapter->where('comic_id', '=', $comic_id)
            ->orderBy('chapter_no', 'desc')
            ->first();
    }

    /**
     * リクエストよりchapterレコードの登録
     *
     * @var request $request
     * @return object
     */
    public function createLatestChapters(Request $request, Comic $comic)
    {
        return $comic->chapters()->create([
            'chapter_no' => $request['chapterNo'],
            'chapter_url' => $request['chapterUrl'],
            'chapter_title' => $request['chapterTitle']
        ]);
    }
}
