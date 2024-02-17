<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function view() {
        return view('blog.index', [
            "title" => "Blog"
        ]);
    }

    public function slug() {
        return view('blog.blog', [
            "title" => "Slug"
        ]);
    }

    public function create() {
        $categories = Category::all();
        return view('blog.create', [
            "title" => "Buat blog",
            "categories" => $categories,
        ]);
    }

    public function upload(Request $request) 
    {

        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('storage/posts'), $fileName);

            $url = asset('storage/posts/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
