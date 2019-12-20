<?php

use App\Loan;
use App\Book;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Book
Route::resource('books','BookController');

// Route::get('books', 'BookController@index')->name('books.index');

// Route::get('books/create', 'BookController@create')->name('books.create');

// Route::post('books', 'BookController@store')->name('books.store');

// Route::get('books/{id}', 'BookController@show')->name('books.show');

// Route::get('books/{book}/update','BookController@update')->name('books.update');

// Route::get('books/{book}/edit','BookController@edit')->name('books.edit');

Route::post('bookpicture/{id}', 'BookController@bookpicture');

// Route::delete('books/{id}', 'BookController@destroy')->name('books.destroy');


//Aritcle 
Route::get('articles', 'ArticleController@index')->name('articles.index');

Route::get('articles/create', 'ArticleController@create')->name('articles.create');

Route::post('articles', 'ArticleController@store')->name('articles.store');

Route::get('articles/{id}', 'ArticleController@show')->name('articles.show');

Route::get('articles/{article}/edit','ArticleController@edit');

Route::delete('articles/{id}', 'ArticleController@destroy')->name('articles.destroy');



//Comments
Route::resource('comments', 'CommentController');
//Route::post('comments/{book}','CommentController@store')->name('comments.store');
//Route::post('comments/{article}','CommentController@store')->name('comments.store');

Route::get('/bookInfo', 'ApiController@index');

//Home page

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//authors

Route::resource('authors','AuthorController');


//StudentCards
Route::resource('studentcards','StudentCardController');


//loans

Route::get('loan/{studentid}/{bookid}', function($studentid,$bookid){

    
    $book = Book::findOrFail($bookid);
    $loan = new Loan;
    $loan->student_id = $studentid;
    $loan->book_id = $bookid;
    $loan->author_id = $book->author_id;  
    $loan->Deadline =  Carbon\Carbon::now()->addWeeks(2)->format('Y-m-d');
    $loan->save();


    return back();

});

// Route::get('send-email', 'EmailController@sendEMail');