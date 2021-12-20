<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $data = DB::table('todos')->get();
//        dd($data);
        return view('pages.index',compact('data',$data));
    }

    public function get_create_page(){
        return view('pages.create');
    }

    public function store_create_data (Request $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        $remark = $request->get('remark');

        DB::table('todos')->insert([
            'title' => $title,
            'content' => $content,
            'remark' => $remark,
        ]);
        return redirect()->route('index');
    }
}
