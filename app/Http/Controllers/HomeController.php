<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Board;
use Illuminate\Http\Request;
use App\Http\Resources\BoardResource;

class HomeController extends Controller
{
    function index(Request $request)
    {
        $boards = Board::notice()
            ->latest()
            ->limit(4)
            ->get();
        $notices = BoardResource::collection($boards);

        $board = Board::gallery()
            ->latest()
            ->first();
        if( $board == null ) {
            $gallery = null;
        } else {
            $gallery = new BoardResource($board);
        }

        $board = Board::newsroom()
            ->latest()
            ->first();
        if( $board == null ) {
            $newsroom = null;
        } else {
            $newsroom = new BoardResource($board);
        }

        return Inertia::render('Home', compact('notices', 'gallery', 'newsroom'));
    }
}
