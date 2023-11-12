@extends('layouts.app')
@section('content')


          <div style="width: 500px; margin-left: 40% ; margin-top: 2%">
              
       
          
          <form method="post" action="{{route('category.store')}}" >
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Category Name</label>
        <input type="text" name="category_name" placeholder="Enter Category Name" class="form-control @error('category_name') is-invalid @enderror" value="{{ old('category_name') }}">
        
        @error('category_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  @endsection