<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\Construction;
class ConstructionController extends Controller
{
    public function index(Request $request)
    {
        $posts = Construction::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }

        // construction/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('construction.index', ['headline' => $headline, 'posts' => $posts]);
    }
}
