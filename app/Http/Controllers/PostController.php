<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class PostController
{
    public function index()
    {
        $posts= DB::table('post')->get();
        return view('blog', ['posts'=>$posts]);
    }
}
