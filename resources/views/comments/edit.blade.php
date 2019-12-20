@extends ('layouts.app')

@section('title',__('Edit Comment'))

@section('content')
<script>
    $(function() {
        $('.focus:first').focus();
    });
</script>
<div class="row m-2">


    <div class="col-md-8">
    <form action="/comments/{{$comment->id}}" method="post">
          
        @method('PATCH')
        <div class="form-group">
                <label for="title">Content</label>
                <input type="text" name="content" class="form-control focus" value="{{$comment->content}}">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Update">
            </div>

            {{csrf_field()}}
        </form>
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
