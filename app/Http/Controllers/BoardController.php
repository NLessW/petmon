<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Board;
use Illuminate\Http\Request;
use App\Http\Resources\BoardResource;

class BoardController extends Controller
{
    public function notice(Request $request)
    {
        $limit = 10;
        $page = (int) $request->input('page', 1);

        $boards = Board::notice()->latest()
            ->paginate($limit);
        $boards = BoardResource::collection($boards);

        return Inertia::render('Community/Notice', [
            'boards' => $boards,
            'limit' => $limit,
            'page' => $page,
        ]);
    }

    public function gallery(Request $request)
    {
        $limit = 9;
        $page = (int) $request->input('page', 1);

        $boards = Board::gallery()->latest()
            ->paginate($limit);
        $boards = BoardResource::collection($boards);

        return Inertia::render('Community/Gallery', [
            'boards' => $boards,
            'limit' => $limit,
            'page' => $page,
        ]);
    }

    public function newsroom(Request $request)
    {
        $limit = 10;
        $page = (int) $request->input('page', 1);
        $cid = (int) $request->input('cid', 1);

        $boards = Board::newsroom()
            ->when(!empty($cid), fn($query) => $query->where('category_id', $cid))
            ->latest()
            ->paginate($limit)
            ->withQueryString()
            ->appends($request->query());
        $boards = BoardResource::collection($boards);

        return Inertia::render('Community/Newsroom', [
            'boards' => $boards,
            'limit' => $limit,
            'page' => $page,
            'cid' => (int) $cid,
        ]);
    }

    public function show(Board $board)
    {
        $board = new BoardResource($board);
        $sub_title = config('site.community')[$board->type];

        return Inertia::render('Community/Show', [
            'board' => $board,
            'subTitle' => $sub_title,
            'page' => (int)request('page', 1)
        ]);
    }
}
