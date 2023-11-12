@extends('layouts.app')
@section('content')



          <div style="width: 500px; margin-left: 40% ; margin-top: 2%">
              
       
          
        <form method="post" action="{{route('subcategory.store')}}" >
    @csrf
    <div class="mb-3">
   
      <select class="form-control" name="category_id">
           @foreach($categories as $row)
        <option value="{{$row->id}}">
          {{$row->category_name}}
          
        </option>
          @endforeach
      </select>

   
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Category Name</label>
        <input type="text" name="subcategory_name" placeholder="Enter Category Name" class="form-control @error('category_name') is-invalid @enderror" value="{{ old('subcategory_name') }}">
        
        @error('subcategory_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

  @endsection