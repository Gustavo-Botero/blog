<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\BlogModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->blogs()->create($request->all());

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogModel  $blogModel
     * @return \Illuminate\Http\Response
     */
    public function show(BlogModel $blogModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogModel  $blogModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogModel $blogModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogModel  $blogModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogModel $blogModel)
    {
        //
    }
}
