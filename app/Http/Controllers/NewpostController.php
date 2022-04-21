<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class NewpostController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:post-create', ['only' => ['index']]);
         $this->middleware('permission:post-list|post-edit|post-delete', ['only' => ['allpost']]);
         $this->middleware('permission:post-edit', ['only' => ['postedit']]);
         $this->middleware('permission:post-delete', ['only' => ['deletepost']]);

    }

    function index()
    {
        return view('new-post');
    }
    function formsubmit(Request $request)
    {
        // return $request->all();
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'title' => 'required',
            'editor' => 'required'
        ]);
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);
        $post = Post::create([
            "category" => $request->category,
            "title" => $request->title,
            "slug" => "laravel-generate-multi-slug-on-load",
            "image" => $imageName,
            'description' => $request->editor
        ]);
        return redirect()->route('newpost')->with('message', 'Post created successfully!');
    }
    function allpost()
    {
        if (request()->ajax()) {
            return datatables()->of(Post::select('*'))
                ->addColumn('action', 'post-action')
                ->addColumn('image', function ($artist) {
                    $url = asset('images/' . $artist->image);
                    return '<img src="' . $url . '" border="0" width="70" class="img-rounded" align="center" />';
                })
                ->rawColumns(['action', 'image'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('allpost');
    }
    function postedit(Request $request)
    {

        $posts = Post::find($request->id);
        return view('edit-post', compact('posts'));
    }
    function editpostedit(Request $request)
    {
        $datas = Post::find($request->id);


        $request->validate([
            'title' => 'required',
            'editor' => 'required'
        ]);


        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('images'), $imageName);

            $datas->category = $request->category;
            $datas->title = $request->title;
            $datas->image = $imageName;
            $datas->description = $request->editor;
            $datas->save();
        } else {
            $datas->category = $request->category;
            $datas->title = $request->title;
            $datas->description = $request->editor;
            $datas->save();
            return redirect()->route('allpost')->with('message', 'Data edited successfully!');
        }
    }
    function deletepost(Request $request)
    {

        $company = Post::where('id', $request->id)->delete();

        return Response()->json($company);
    }
}
