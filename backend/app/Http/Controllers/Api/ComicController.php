<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Comic\ComicRepositoryInterface;
use App\Repositories\Chapter\ChapterRepositoryInterface;
use App\Models\Comic;
use App\Models\Chapter;

class ComicController extends Controller
{
    /**
     * Undocumented function
     *
     * @param ComicRepositoryInterface $comic_repository
     * @param ChapterRepositoryInterface $chapter_repository
     */
    public function __construct(
        ComicRepositoryInterface $comic_repository,
        ChapterRepositoryInterface $chapter_repository
    )
    {
        $this->comic_repository = $comic_repository;
        $this->chapter_repository = $chapter_repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'テスト';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
        * TODO:
        * ・バリデーション(chapter-noをユニークにする)
        * ・例外処理
        * ・Resourceクラスを使う
        */
        //リクエストより対象漫画の特定
        $comic = $this->comic_repository->getComicByTitle($request['title']);
        //新着漫画の場合はDBへ登録
        if (is_null($comic)) {
            $comic = $this->comic_repository->createComic($request);
        }

        $latest_chapter = $this->chapter_repository->getLatestChapter($comic->id);
        if ($latest_chapter->chapter_no === $request['chapterNo']) {
            return $this->generateResponse($latest_chapter->toArray(), 303);
        }
        $latest_chapter = $this->chapter_repository->createLatestChapters($request, $comic);
        
        return $this->generateResponse($latest_chapter->toArray(), 200);
    }

    /**
     * JSONレスポンスの生成
     *
     * @param Array $data
     * @param Integer $code
     * @return Json
     */
    public function generateResponse(Array $data, Int $code) {
        return response()->json($data, $code);
    }
}
