<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->with('createur')->paginate(100);
        return view("dashboard.pages.blogs.index")->with("blogs", $blogs);
    }

    public function plongeurBlogs()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->with('createur')->paginate(100);
        return view("plongeurDash.pages.blogs.index")->with("blogs", $blogs);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.pages.blogs.ajouter");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'tags' => 'required|string',
        //     'title' => 'required|string',
        //     "content" => "required|string",

        // ], [
        //     "tags.required" => "Tag est obligatoire",
        //     "title.required" => "Titre est obligatoire",
        //     "content.required" => "Contenu est obligatoire",

        // ]);
        try {
            $blog = new Blog();
            $tags = $request->tags;
            $title = $request->title;
            $content = $request->content;

            $blog->tag = $tags;
            $blog->title = $title;
            $blog->content = $content;
            $blog->user_id = auth()->user()->id;
            $blog->description = '';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $nomImage = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('admin/uploads/images/blogs/'), $nomImage);
                $blog->image = 'https://diver.cdma-solution.ma' . '/admin/uploads/images/blogs/' . $nomImage;
            }

            $blog->save();

            return response()->json(array('message' => "Blog est ajouté avec succés"), 200);
        } catch (\Exception $err) {
            return response()->json(array('message' => $err), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view("dashboard.pages.blogs.modifier", ["blog" =>  $blog]);
    }
    public function blogDetails($id)
    {
        $blog = Blog::find($id);
        return view("plongeurDash.pages.blogs.details", ["blog" =>  $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     "image" => "required|binary",
        //     "description" => "required|string",
        //     'tag' => 'required|string',
        //     'title' => 'required|string',
        //     "content" => "required|string",

        // ], [
        //     "image.required" => "Image est obligatoire",
        //     "description.required" => "Description est obligatoire",
        //     "tag.required" => "Tag est obligatoire",
        //     "title.required" => "Titre est invalid",
        //     "content.required" => "Contenu est obligatoire",
        // ]);
        try {
            $blog = Blog::find($id);

            $tags = $request->tags;
            $title = $request->title;
            $content = $request->content;

            $blog->tag = $tags;
            $blog->title = $title;
            $blog->content = $content;
            $blog->user_id = auth()->user()->id;
            $blog->description = '';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $nomImage = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('admin/uploads/images/blogs/'), $nomImage);
                $blog->image = 'https://diver.cdma-solution.ma' . '/admin/uploads/images/blogs/' . $nomImage;
            }

            $blog->save();

            return response()->json(array('message' => "Blog est modifié avec succés"), 200);
        } catch (\Exception $err) {
            dd($err);
            return response()->json(array('message' => $err), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $deletedBlog = Blog::where("id", $id)->delete();
            if ($deletedBlog <> 0) {
                return response()->json(array('message' => "Blog est supprimé avec succés"), 200);
            } else {
                return response()->json(array('message' => "Erreur servenu"), 500);
            }
        } catch (\Exception $err) {
            return response()->json(array('message' => "Erreur servenu"), 500);
        }
    }
}