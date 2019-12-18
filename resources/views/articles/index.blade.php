@extends('layouts.app')

@section('title','Articles')

@section('content')
    {{-- <p>The articles of aljouf Library : </p> --}}

    {{-- <ul> --}}
        <div class="row"> 
            @forelse ($articles as $article)
            <div class="col-md-4">
                <div class="card">
                    <h4 class="card-body"> <a href="{{route('articles.show',['id' => $article->id]) }}">{{ $article->title }}</a></h4>
        {{-- @foreach ($articles as $article) --}}
            {{-- <li><a href="{{route('articles.show',['id' => $article->id]) }}">{{ $article->title }}</a></li> --}}

        {{-- @endforeach --}}
                    <div class="card-footer">
                    {{__('Posted by' )}}: {{$article->author->name}}
                    </div>
                </div>

            </div>
            @empty
             {{__('No Books yet')}}

            @endforelse
        </div>
    {{-- <ul> --}}
            <div class="form-group">
                <button class="btn btn-link btn-lg"> <a href="{{ route('articles.create') }}">{{__('Create Article')}} </a></button>
            </div>

    {{-- <ul> --}}
    {{-- <a href="{{ route('articles.create') }}">Create Article </a> --}}
@endsection