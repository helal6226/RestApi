<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\Comment;
use App\Author;
use App\Loan;
use Illuminate\Support\Str;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
     {
         $this->middleware('auth')->except('index');
     }
    public function index()
    {
        //
        //$books = Book::all()->unique('title');
        //dd($books);
       // return view('books.index',['books'=> $books]);
       $books = Book::orderBy('updated_at','desc')->paginate(10);
      
        return view('books.index',compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
       // $authors = Author::all();
        $authors = Author::orderBy('name','asc')->get();
        return view('books.create',['authors'=>$authors]);
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
        $validatedData = $request->validate([
        'subject' =>'required|max:100',
        'title' => 'required|max:255',
        'creation_date'=>'nullable|date',
       // 'loan_id' => 'required|integer',
        ]);

        $b = new Book;
        $b->subject = $validatedData['subject'];
        $b->title = $validatedData['title'];
        $b->creation_date = $validatedData['creation_date'];
        $b->author_id = auth()->user()->id;
        // $b->loan_id = $validatedData['loan_id'];
        $b->save();

        session()->flash('message','Book was created.');
        return redirect()->route('books.index');


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

        $book = Book::findOrFail($id);
        $comments = Comment::where('book_id', $id)->get();
        $loans = Loan::where('book_id', $id)->orderBy('id','desc')->limit(1)->get() ;
        return view('books.show',compact('book','comments','loans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
     {
         //

    }

    public function bookpicture(Request $request, $id)
     {
         //
       
         if ($request->hasFile('file')) {
            $fname = Str::random(20) . '.' . $request->file('file')->getClientOriginalExtension();
            $path = $request->file('file')->move('bookpic', $fname);
            
            Book::findOrFail($id)->update(['picture' => $path]);
            return back();

    }
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        
        if(Auth::id() != $book->user_id){

            return abort(401);
         }

        // $book->update($request->all());
        
         return redirect()->back;
         $validatedData = $request->validate([
         'subject' =>'required|max:100',
         'title' => 'required|max:255',
         'creation_date'=>'nullable|date',
         'author_id' => 'required|integer',
          'loan_id' => 'required|integer',
           ]);
    
        $post =$request->all();

            
        $b = new Book;
        $b->subject = $validatedData['subject'];
        $b->title = $validatedData['title'];
        $b->creation_date = $validatedData['creation_date'];
        $b->author_id = $validatedData['author_id'];
        $b->loan_id = $validatedData['loan_id'];
        $b->save();
    
        session()->flash('message','Book was created.');
        return redirect()->route('books.index');
    
        


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
        $book = Book::findOrFail($id);
        if(Auth::id() != $book->author_id){

            return abort(401);
        }
        
        $book->delete();

        return redirect('books');
    }
}
