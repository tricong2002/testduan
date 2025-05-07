<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class Questions extends Controller
{
    public function index(Request $request)
    {
        $data = Post::all(); // Lấy tất cả các bài viết
        dd($data);
        return response()->json($data); // Trả về dữ liệu dưới dạng JSON
    }
}
