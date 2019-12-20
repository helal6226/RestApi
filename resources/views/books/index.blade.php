@extends('layouts.app')

@section('title','Books')

@section('content')
    {{-- <h3><p>The bookks of aljouf Library : </p></h3> --}}

    {{-- <ul> --}}
    <div class="row"> 
        @forelse ($books as $book)
        <div class="col-md-4">
            <div class="card">
                <h4 class="card-body"> <a href="{{ url('books/' . $book->id) }}">{{ $book->title }}</a></h4>
            <p><span>Read by: </span>{{ $book->analytics == null ? 0: $book->analytics->views }}</p>
            <?php  $loan = \App\Loan::where('book_id', $book->id)->count()  ?>
        
            <p>Currently Brrowed By : {{$loan}} Stundets</p>  
            
            <p>ISBN : {{$book->isbn}}</h2>
                <div>
               
                <?php $openBook = $openlibrary->bookInfo($book->isbn);?>
               
                @if($openBook && array_key_exists('thumbnail_url', $openBook))
                <img src="{{ $openBook['thumbnail_url']}}" alt="" style="width:50px">
                @endif
                </div>
                {{-- <div class="mb-3">image*********** --}}
                {{-- <a href="{{route('books.edit',$book)}}"class="btn btn-warning">{{__('Edit')}}</a> --}}
                {{-- <form method="post" action="{{route('books.destroy',$book)}}" style="display: inline-block"> --}}
                    {{-- @method('DELETE') --}}
                    {{-- @csrf --}}
                    {{-- <button class="btn btn-danger" onclick="return confirm('{{__('Are you sure?')}}')">{{__('Delete')}}</button> --}}
                {{-- </form> --}}
                <div class="card-footer">

                    @if (auth()->check()) 
                    <a href="{{ url('loan/' . auth()->user()->id . '/' . $book->id) }}" class="btn btn-primary pull-left {{ (auth()->user()->is_author )? 'disabled':''}}" >Loan the book<a>
                     @endif
                {{-- {{ dd($book)}}  --}}
                   <span class="float-right"> {{__('Posted by' )}}: {{$book->author->name}} </span>
                 
                </div>
            </div>

        </div>
        @empty
         {{__('No Books yet')}}

        @endforelse
    </div>
    <div class="span30 centered-text mt-3">
        <div>
          {{ $books->links() }}
        </div>

    {{-- <ul> --}}
        {{-- <div class="form-group">
                <button class="btn btn-link btn-lg"> <a href="{{ route('books.create') }}">{{__('Create Book')}} </a></button>
        </div> --}}
    </div>
@endsection