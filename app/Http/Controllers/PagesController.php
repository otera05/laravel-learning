<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        // 配列に値をセット
        // $data = [];
        // $data["first_name"] = "Luke";
        // $data["last_name"] = "Skywalker";

        $first_name = "Luke";
        $last_name = "Skywalker";

        // view関数の第2引数に配列を渡す
        return view('pages.about', compact('first_name', 'last_name'));
    }
}
