@extends('layouts.app')


@section('title',__('Create Article'))

@section('content')
        
        <h2>{{__('Create article')}}</h2>
        <form method="POST" action="{{ route('articles.store') }}">

            @csrf 
            <div class="form-group">
            <p class="font-weight-bold"><label for="formGroupExampleInput"> TITLE </label>
                 <input type="text"  class="form-control" id="formGroupExampleInput" name="title" value="{{ old('title') }} "></p>
            
            
            <p class="font-weight-bold"><label for="formGroupExampleInput"> CREATION DATE </label>
                 <input type="text" class="form-control" id="formGroupExampleInput" name="creation_date" value="{{ old('creation_date') }}"></p>

                
            <p class="font-weight-bold"><label for="formGroupExampleInput"> AUTHOR Id  </label>
                <select class="form-control" id="formGroupExampleInput" name="author_id">
                                @foreach ($authors as $author)
                                    <option value="{{ $author->id }}"
                                        @if ($author->id == old('author_id'))
                                            selected="selected"
                                        @endif
                                    >{{ $author->name }}</option>
                                @endforeach
                            </select>
            </p>
            <p class="font-weight-bold"><label for="formGroupExampleInput"> LOAN Id </label> 
                <input type="text" class="form-control" id="formGroupExampleInput" name="loan_id" value="{{ old('loan_id') }}"> </p>
                    
            <input type="submit" value="Submit" class="btn btn-outline-secondary">
            <a class="btn btn-outline-danger" href="{{ route('articles.index') }}">Cancel</a>

            
        </form>

@endsection