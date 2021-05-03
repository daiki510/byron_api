<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
use App\Models\Chapter;

class ComicController extends Controller
{
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
        var_export($request->request->all());
        /**
        * TODO:
        * 1. リクエストより対象漫画の特定
        * 2. 最新チャプターの登録 or 最新ではなかったときの処理
        * 3. レスポンス (例外処理含む)
        * リポジトリパターンで実装
        * プロパティ名の変換
        */
        return 'テスト';
    }
}
