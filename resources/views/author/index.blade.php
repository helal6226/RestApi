@extends('layouts.app')

@section('title','authors')

@section('content')
    {{-- <h3><p>The bookks of aljouf Library : </p></h3> --}}

    {{-- <ul> --}}
    {{-- <div class="row">  --}}
        <div class="row">
            <div class="col-md-12">
                <div class="grid simple">
                    <div class="grid-title no-border">
                        <h4> Authors <span class="semi-bold">List</span></h4>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="#grid-config" data-toggle="modal" class="config"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                    </div>
                    <div class="grid-body no-border">
                        {{-- <h3>TableName <span class="semi-bold">List</span></h3> --}}
                        <table class="table table-reflow">
                            <thead>
                                <tr>
                                    <th style="width:9%">Author Name</th>
                                    <th style="width:6%">Number books</th>
                                    <th style="width:6%">Number of borrowers</th>
                                    <th style="width:6%">Title books </th>
                                    {{-- <th style="width:9%">Edit</th>
                                    <th style="width:9%">Delete</th> --}}
                                    
                                </tr>
                            </thead>
                        
                            
                            <tr>
                     @forelse ($authors as $author)
                           {{-- <div class="col-md-12"> --}}
                        <h2><td>{{ $author->name }}</td></h2>
                        <h2><td>({{ $author->books()->count()}})</td></h2>
                        <h2><td>({{ $author->loan()->count()}})</td></h2>
                        <ul> <td>
                            @foreach ( $author->books()->get() as $book )
                                  <li> <a href="{{url('books/' . $book->id) }} ">{{ $book->title}} </a></li>
                        
                             @endforeach
                            </td>
                        </ul>
                            {{-- <td><a href="{{ url('authors/'. $author->id .'/edit' )}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="Link" class="btn btn-danger">Delete</a></td> --}}

                                     

                            </tr>

            

                 @empty
                        <tr>
                            <td colspan="3" class="info"> {{__('You done have any books or articles yet')}}</td>
                        </tr>

                 @endforelse

                 <tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
        

            {{-- </div> --}}
    {{-- <ul> --}}
        
        <div class="form-group">
                <button class="btn btn-link btn-lg"> <a href="{{ route('books.create') }}">{{__('Create Book')}} </a></button>
        </div>
    
        <div class="span30 centered-text mt-3">
            <div>
              {{ $authors->links() }}
            </div>
        </div>
        
@endsection


 {{-- <a href="{{route('authors.edit',author)}}"class="btn btn-warning">{{__('Edit')}}</a>
                <form method="post" action="{{route('books.destroy',$book)}}" style="display: inline-block">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('{{__('Are you sure?')}}')">{{__('Delete')}}</button>
                </form>
                <h4 class="card-body"> <a href="{{route('books.show',['id' => $book->id]) }}">{{ $book->title }}</a></h4>
                {{-- <div class="mb-3">image*********** --}}
                               {{-- --}}
            {{-- </div> --}}