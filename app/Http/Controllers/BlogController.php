<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * @param Blog $blog
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * @param Request $request
     * @param Blog $blog
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * @param Blog $blog
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
