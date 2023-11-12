
  
            
@extends('layouts.app')
@section('content')




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
      <th scope="col">DB-ID</th>
      <th scope="col">Category-Name</th>
      <th scope="col">SubCategory-Name</th>
      <th scope="col">SubCategory-Slug</th>
     
       <th scope="col">Action</th>
      </tr>
    </thead>
                  <tbody>
                  
          <?php
        foreach ($data as $key=>$row) {
             ?>
          
      <tr>
        <th scope="row"> <?php echo  ++$key ?></th>
      <th scope="row"> <?php echo $row->id; ?></th>
      <td><?php echo $row->Category->category_name; ?></td>

      <td> <?php echo $row->subcategory_name; ?></td>
      <td><?php echo $row->subcategory_slug ;?> </td>
     

      <td>
        <a href="{{route('subcategory.edit',$row->id)}}" class="btn btn-sm btn-info">Edit</a>
        <a href="{{route('subcategory.destroy',$row->id)}}" class="btn bnt-sm btn-danger">Delete</a>
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