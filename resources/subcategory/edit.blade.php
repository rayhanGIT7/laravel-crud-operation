@extends('layouts.app')
@section('content')
<div style="width: 500px; margin-left: 40%; margin-top: 2%">

    <form method="post" action="{{ route('subcategory.update', $data->id) }}">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="mb-3">
            <select class="form-control" name="category_id">
                @foreach($category as $row)
                <option value="{{ $row->id }}" @if($row->id==$data->category_id) selected @endif>
                    {{ $row->category_name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Subcategory Name</label>
            <input type="text" name="subcategory_name" placeholder="Enter Subcategory Name" class="form-control @error('subcategory_name') is-invalid @enderror" value="{{ $data->subcategory_name }}">

            @error('subcategory_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
