<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $request->validate([
            'content' => 'required'
        ]);
        $request['student_id'] = Auth::id();
        $book->comments()->create($request->all());
        // $article->comments()->create($request->all());


        return redirect()->back();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
     //   $book = \App\Book::findOrFail(request('book_id'));

        $request->validate([
            'content' => 'required'
        ]);
        $request['student_id'] = Auth::id();

        \App\Comment::create($request->all());
      //  $book->comments()->create($request->all());
        // $article->comments()->create($request->all());


        return ['data' => 'Comment added'];
       // return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('comments.edit', ['comment'=>\App\Comment::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // dd(request()->all());


        $request->validate([
            'content' => 'required'
        ]);
       $comment = \App\Comment::find($id);
       $comment->content = $request->input('content');
       $comment->save();

        return redirect(route('books.show', $comment->book_id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
