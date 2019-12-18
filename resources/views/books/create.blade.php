@extends('layouts.app')


@section('title',__('Create book'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="grid simple form-grid">
                <div class="grid-title no-border">
                    <h2>{{__('Create book')}}</h2>
                        <form method="POST" action="{{ route('books.store') }}">

                         @csrf 

                            <div class="form-group">        
                            <p class="font-weight-bold"><label name="subject"> SUBJECT </label>
                            <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}"></p>
                            <p class="font-weight-bold"><label name="title"> TITLE </label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"></p>
                            <p class="font-weight-bold"><label name="creation_date"> CREATION DATE </label>
                            <input type="text" class="form-control" id="reation_date" name="creation_date" value="{{ old('creation_date') }}"></p>
                            {{-- <p class="font-weight-bold"><label name="author"> CREATION DATE </label>
                                <input type="text" class="form-control" id="author" name="author_id" value="{{ old('') }}"></p> --}}
                             </div>
            {{-- <p class="font-weight-bold"><label for="formGroupExampleInput"> LOAN Id </label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="loan_id" value="{{ old('loan_id') }}"></p> --}}
                           
                                <input type="submit" value="Submit" class="btn btn-outline-secondary">
                                <a class="btn btn-outline-danger" href="{{ route('books.index') }}">Cancel</a>

            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection