@extends('layouts.app')

@section('title','authors')

@section('content')
    {{-- <h3><p>The bookks of aljouf Library : </p></h3> --}}

    {{-- <ul> --}}
    {{-- <div class="row">  --}}
        <div class="container">
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
                        {{ Form::open(['action'=> ['AuthorController@update',$book->id],'role'=>'form']) }}
                            <div class="form-group">
                                <label class="form-label">SUBJECT </label><span class="help">e.g.</span>
                                {{ Form::text('subject','$book->subject',['class'=>'form-control'])}}
                            </div>

                            <div class="form-group">
                                <label class="form-label">TITLE</label><span class="help">e.g.</span>
                                {{ Form::text('title','$book->title',['class'=>'form-control'])}}
                            </div>



@stop


                                    {{-- <div class="form-group">        
                                        <p class="font-weight-bold"><label name="subject"> SUBJECT </label>
                                        <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}"></p>
                                        <p class="font-weight-bold"><label name="title"> TITLE </label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"></p>
                                        <p class="font-weight-bold"><label name="creation_date"> CREATION DATE </label>
                                        <input type="text" class="form-control" id="reation_date" name="creation_date" value="{{ old('creation_date') }}"></p>
                                        <p class="font-weight-bold"><label for="author_id"> AUTHOR : </label>
                                        <select class="form-control" id="author_id" name="author_id">
                                            @foreach ($authors as $author)
                                                <option value="{{ $author->id }}">
                                                    {{ $author->name }}
                                                </option>
                                            @endforeach
                                        </select> --}}
