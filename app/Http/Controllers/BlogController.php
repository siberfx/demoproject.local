<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BlogController extends Controller
{

    /**
     * @return Factory|View
     */
    public function index()
    {
        $blogs = Blog::with('user')->get();

        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param Blog $blog
     * @return Factory|View
     */
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * @param Blog $blog
     * @return Factory|View
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    /**
     * @param Request $request
     * @param Blog $blog
     * @return RedirectResponse
     */
    public function update(Request $request, Blog $blog)
    {
        $data = [
            'title' => $request->title,
            'body' => $request->body,
            'slug' => str_slug($request->title),
        ];

        $blog->update($data);

        return redirect()->route('blog.index');
    }

    /**
     * @param Blog $blog
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
