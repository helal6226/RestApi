@extends('layouts.app')

@section('content')
      
             
<div class="container">
    <div class="row">
     <table class="table">
      <tr>
       <th>Student Name </th>
       <th>Student Number</th>
       <th>Degree</th>
       <th>Barcode</th>
       <th>Student_id</th>
       <th>Delete</th>


      </tr>
      @foreach ($studentcards as $studentcard)
      <tr>
       <td>{{ $studentcard->Firstname }}</td>
       <td>{{ $studentcard->StudentNumber }}</td>
       <td>{{ $studentcard->Degree }}</td>
       <td>{{ $studentcard->Barcode }}</td>
       <td>{{ $studentcard->student_id }}</td>


       <td>
        <form action="{{ url('studentcards/' . $studentcard->id ) }}" method="post">
         {{ method_field('delete') }}
         {{ csrf_field() }}
         <input type="submit" name="Delete" value="Delete" class="btn btn-danger" onClick = 'return confirm("Are you sure you want to delete this studentcard ")'>
        </form>
       </td>
      </tr>
      @endforeach
     </table>
    </div>
    </div>
               


  
@endsection