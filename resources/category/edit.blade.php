@extends('layouts.app')
@section('content')
          <div style="width: 500px; margin-left: 40% ; margin-top: 2%">
              
      
      
          <form method="post" action="{{route('category.update',$category->id)}}" >
              <input type="hidden" name="_method" value="PUT">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Category Name</label>
        <input type="text" name="category_name" placeholder="Enter Category Name" class="form-control @error('category_name') is-invalid @enderror" value="{{$category->category_name}}">
        
        @error('category_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
            
   @endsection