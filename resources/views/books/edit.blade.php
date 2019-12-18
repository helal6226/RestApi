@extends ('layouts.app')

@section('title',__('Edit book'))

@section('content')
<div class="row">
    <div class="col-md-8">
        <h1>{{$book->title}}</h1>

        <p class="load">{{ $book->subject }}</p>
       
    </div>

    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt><b>{{__('Created at')}}:</b></dt>
                <dd> {{$book->creation_date ?? 'Unknown'}}</dd>
            </dl>
            
            <dl class="dl-horizontal">
                <dt><b>{{__('Updated at')}}:</b></dt>
                <dd> {{$book->updated_at}}}</dd>
            </dl>

            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {!!Html::linkRoute('books.edit','Cancel',array($book->id),array('class'=>'btn 
                            btn-danger btn-block')) !!}
                </div>
                <div class="col-sm-6">
                    {!!Html::linkRoute('books.edit','Save Changes',array($book->id),array('class'=>'btn 
                            btn-success btn-block')) !!}
                </div>
            </div>
        </div>
    </div>
</div>








{{-- 
    <form method="POST" 
    action="{{route('books.update',['id'=>$book->id]) }}">
    @csrf
    <button type="submit" class="btn btn-warning , mt-2" >{{__('Update')}}</button>
      

    <div class="card-body">
        <div><b>{{__('Author')}}:</b> {{$book->author->name}}</div>
        {{-- <div><b>{{__('Loaned by')}}:</b> {{$book->loan->StudentName}}</div> --}}
        {{-- <div><b>{{__('Created at')}}:</b> {{$book->creation_date ?? 'Unknown'}}</div>
        <div><b>{{__('Updated at')}}:</b> {{$book->updated_at}}</div>
            
        <p><a  class="btn btn-primary" href="{{ route('books.index') }}">Back</a></p> --}}
            

        {{-- <p class="font-weight-bold"><label for="formGroupExampleInput"> CREATION DATE </label> --}}
        
        {{-- <p class="font-weight-bold"><label for="formGroupExampleInput"> AUTHOR Id : </label>
    </div>
</div >
        --}}

{{-- <form method="POST" 
    action="{{route('books.update',['id'=>$book->id]) }}">
    @csrf --}}
    
{{--   
</form>
<form method="POST" 
    action="{{route('books.destroy',['id'=>$book->id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger , mt-2" >{{__('Delete')}}</button>
  
</form> 




 --}}








    {{-- <h2> {{__('Update book')}} </h2>

    <form action="{{route('books.update',$book)}}" method="post">
        @method('PATCH')
        @csrf
        <div class="form-qroup">
            <label for="title">{{__('Title')}}</label>
            <input type="text" name="title" class="form-control" @isset($book) value="{{$book->title}}"@endisset>
        </div>

        <div class="form-qroup">
            <label for="subject">{{__('Subject')}}</label>
            <textarea class="form-control" name="subject" id="subject" cols="30" rows="10">@isset($book){{$book->subject}}@endisset</textarea>
        </div>
        <div class="form-qroup">
            <button class="btn btn-success">{{__['submitText'=>__('edit')]}}</button>
        </div> --}}

@endsection
