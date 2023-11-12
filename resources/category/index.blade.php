@extends('layouts.app')
@section('content')

       
<!-- 
          <div>
              
              <a href="{{route('category.create')}}" class="btn btn-sm btn-info">Add Category</a>
          </div>
  <table class="table" style="width: 500px; margin-left: 40%">

  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
  
      <th scope="col">Slug</th>
       <th scope="col">Action</th>
      </tr>
  </thead>

  <tbody>
  <?php
  foreach ($category as $row) {
?>
    <tr>
      <th scope="row"> <?php echo $row->id; ?></th>
      <td> <?php echo $row->category_name; ?></td>
      <td><?php echo $row->category_slug ;?> </td>

      <td>
        <a href="{{route('category.edit',$row->id)}}" class="btn btn-sm btn-info">Edit</a>
        <a href="{{route('category.destroy',$row->id)}}" class="btn bnt-sm btn-danger">Delete</a>
      </td>
    </tr>


<?php }
?> -->
            




              <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
 <table id="example1" class="table table-bordered table-striped">
     <thead>
     <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
  
      <th scope="col">Slug</th>
       <th scope="col">Action</th>
      </tr>
    </thead>
                  <tbody>
                  
          <?php
        foreach ($category as $row) {
             ?>
      <tr>
      <th scope="row"> <?php echo $row->id; ?></th>
      <td> <?php echo $row->category_name; ?></td>
      <td><?php echo $row->category_slug ;?> </td>

      <td>
        <a href="{{route('category.edit',$row->id)}}" class="btn btn-sm btn-info">Edit</a>
        <a href="{{route('category.destroy',$row->id)}}" class="btn bnt-sm btn-danger">Delete</a>
      </td>
    </tr>


<?php }
?>
  </tbody>              
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection