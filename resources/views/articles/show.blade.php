@extends('layouts.app')

@section ('title','article Details')

@section ('content')
    <div class="card">
   
        <h3 class="card-header">{{$article->title}}</h3>

        <div class="card-body">
       
             {{$article->subject}}
        </div>

        <div class="card-body">
               <div><b>{{__('Author')}}:</b> {{$article->author->name}}</div>
               <div><b>{{__('Loaned by')}}:</b> {{$article->loan->StudentName}}</div>
               <div><b>{{__('Created at')}}:</b> {{$article->creation_date ?? 'Unknown'}}</div>
               <div><b>{{__('Updated at')}}:</b> {{$article->updated_at}}</div>
        </div>
    </div >

    <form method="POST"
        action="{{ route('articles.destroy',['id' =>$article->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger , mt-2" >{{__('Delete')}}</button>
    </form>

    <p><a class="btn btn-primary" href="{{ route('articles.index') }}">Back</a></p>

    <h3 class="mt-2">{{__('Comments')}}</h3>
    <div id="comments" class="mt-4">

        @forelse($article->comments as $comment)

          <div class="card p-3 mb-2">
                {{$comment->content}}
                <p>{{__('Student')}}: {{$comment->student->name}}</p>
          </div>
                 
          @empty 

        {{__('No comments yet')}}
          @endforelse

    </div>
    @auth
    <div id="commentForm" class="mt-5">
        <div class="card">
            <h5 class="card-header bg-secondary text-white">{{__('Type your comment here')}}</h5>
            <div class="card-body">
                <form action="{{route('comments.store',$article->id)}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="content">{{__('Content')}}</label>
                        <textarea class="form-control"
                                  placeholder="{{__('Type your comment here!')}}"
                                  name="content" id="content" cols="30" rows="10"></textarea>
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



       









    {{-- <ul> --}}
       
             {{-- <li>title: {{ $article->title }}</li> --}}
             {{-- <li>creation_date: {{ $article->creation_date ?? 'Unknown' }} </li> --}}
             {{-- <li>author: {{ $article->author->name }}</li> --}}
             {{-- <li>loan: {{ $article->loan->StudentName }}</li> --}}
       
               
    {{-- </ul> --}}

    

    {{-- <h3 class="mt-2">{{__('Comments')}}</h3>
    <div id="comments" class="mt-4">

        @forelse($book->comments as $comment)

          <div class="card p-3 mb-2">
                {{$comment->content}}
                <p>{{__('Student')}}: {{$comment->student->name}}</p>
          </div>
                 
          @empty 

        {{__('No comments yet')}}
          @endforelse

    </div>
    @auth
    <div id="commentForm" class="mt-5">
        <div class="card">
            <h5 class="card-header bg-secondary ">{{__('Type your comment here')}}</h5>
            <div class="card-body">
                <form action="{{route('comments.store',$book->id)}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="content">{{__('Content')}}</label>
                        <textarea class="form-control"
                                  placeholder="{{__('Type your comment here!')}}"
                                  name="content" id="content" cols="30" rows="10"></textarea>
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
    @endauth --}}

@endsection