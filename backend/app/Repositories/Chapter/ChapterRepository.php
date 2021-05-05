<?php

namespace App\Repositories\Chapter;

use App\Models\Chapter;
use App\Models\Comic;

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
     * @var array $attributes
     * @return object
     */
    public function createLatestChapters(Array $attributes, Int $comic_id)
    {
        return $this->chapter->create([
            'comic_id' => $comic_id,
            'chapter_no' => $attributes['chapterNo'],
            'chapter_url' => $attributes['chapterUrl'],
            'chapter_title' => $attributes['chapterTitle']
        ]);
    }
}
