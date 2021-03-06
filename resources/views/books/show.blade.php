@extends('layouts.app')

@section ('title','book Details')

@section ('content')
<div class="container">
    <div class="card">
   
        <h3 class="card-header">{{$book->title}}</h3>
        

        <div class="card-body">
            @if ($book->picture)
            <img width="200"  src="{{ url($book->picture) }}" />
            
            @endif
            @if (auth()->user()->id == $book->author_id)

            
            <form  action="{{ url('bookpicture/'. $book->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file">
                <input type="submit" value="Upload">
            </form>
            @endif
           
            {{$book->subject}}
        </div>

        
    
        <div class="card-body">
            <div><b>{{__('Author')}}:</b> {{$book->author->name}}</div>
            {{-- <div><b>{{__('Loaned by')}}:</b> {{$book->loan->StudentName}}</div> --}}
            <div><b>{{__('Created at')}}:</b> {{$book->creation_date ?? 'Unknown'}}</div>
            <div><b>{{__('Updated at')}}:</b> {{$book->updated_at}}</div>
                
                
                

            {{-- <p class="font-weight-bold"><label for="formGroupExampleInput"> CREATION DATE </label> --}}
            
            {{-- <p class="font-weight-bold"><label for="formGroupExampleInput"> AUTHOR Id : </label> --}}
        </div>
         </div >
        </form>
           
   
    <div class="row">
        @if(auth()->user()->is_author || auth()->user()->id == $book->author_id)

        <a  class="btn btn-success" href="{{ route('books.edit', $book->id) }}">Edit</a>
        @endif
    <a  class="btn btn-primary" href="{{ route('books.index') }}">Back</a>

    @if(auth()->user()->is_author || auth()->user()->id == $book->author_id)
    <form action="{{ url('books/' . $book->id) }}" method="post">
        {{ method_field('delete') }}
        {{ csrf_field() }}
        <input type="submit" name="Delete" value="Delete" class="btn btn-danger" onClick = 'return confirm("Are you sure you want to delete this Book")'>
       </form>
    @endif
    </div>

    <h3 class="mt-2">{{__('Comments')}}</h3>
    <div id="comments" class="mt-4">

        @forelse($book->comments as $comment)

          <div class="card p-3 mb-2">
                {{$comment->content}}
                <p>{{__('User')}}: {{$comment->user->name}}</p>
                
          </div>

          @if (auth()->user()->id == $book->author_id || auth()->user()->id == $comment->user_id)
         
          <div class="row">
              <div class="col-md-1 p-1">
          <form action="{{ url('comments/' . $comment->id) }}" method="post" >
            {{ method_field('delete') }}
            {{ csrf_field() }}
            <input type="submit" name="Delete" value="Delete" class="btn btn-danger" onClick = 'return confirm("Are you sure you want to delete this Book")'>
           </form>
        </div>
        <div class="col-md-1 p-1">
           <a href="/comments/{{$comment->id}}/edit" name="Delete" value="Edit" class="btn btn-primary">Edit</a>
            </div>
        </div>
          @endif 
          @empty 

        {{__('No comments yet')}}
          @endforelse

    </div>
    @auth
    <div id="commentForm" class="mt-5">
        <div class="card">
            <h5 class="card-header bg-secondary text-white">{{__('Type your comment here')}}</h5>
            <div class="card-body">
                <form action="{{route('comments.store')}}" method="post" id="comment">
                   
                    <input type="hidden" id="token" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label for="content">{{__('Content')}}</label>
                        <textarea class="form-control"
                                  placeholder="{{__('Type your comment here!')}}"
                                  name="content" id="content" cols="30" rows="10"></textarea>

                                  <input type="hidden" id="book_id" value = "{{ $book->id }}" />
                                  <input type="hidden" id="author_id" value = "{{ $book->author_id }}" />
                                  <input type="hidden" id="user_id" value = "{{ auth()->user()->id }}" />
                    </div>

                    <div class="form-group">
                         <button class ="btn btn-success" type="submit">{{__('Save')}}</button>
                         
                    </div>
                </form>
            </div>
        </div>
    </div>
    @else
    <p>{{__('log in to comment')}}</p>
    @endauth


    <h3> Loan History : </h3>
	@foreach ( $loans as $loan)
        <li>  {{ $loan->Deadline }} </li>
        <li> {{ $loan->StudentName }}</li>
    @endforeach

</div>

@endsection



@section('script')
<script>
    $(document).ready(function(){

        $('#comment').on('submit', function(e){
            
            e.preventDefault();
            var route = $(this).attr('action');
            console.log('route =  ', route);
            var data  = {
                'content' : $('#content').val(),
                'book_id': $('#book_id').val(),
                'user_id': $('#user_id').val(),
                'author_id': $('#author_id').val(),
                '_token': $('#token').val()
            };
            console.log(data);

            $.ajax({
                method:'POST',
                url: route,
                data: data,
                success: function(d){
                    console.log(d);
                    alert(d.data);
                }
            })

        });

    });
</script>
@endsection