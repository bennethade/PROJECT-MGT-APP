@extends('layouts.app')

@section('content')



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Admin Operations</h1>
        </div>
        <div class="col-sm-6" style="text-align: right;">
          {{-- <a href="{{ route('general_projects.add') }}" class="btn btn-primary">Add New Project</a> --}}
          
        </div>
        
      </div>
    </div>
  </section>



  <section class="content">
    <div class="container-fluid">
      
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Search</h3>
        </div>
        
        <form method="get" action=" ">
          <div class="card-body">
            <div class="row">
              <div class="form-group col-md-6">
                <label></label>
                <input type="text" class="form-control" name="name" placeholder="Search Here" value="{{ Request::get('name') }}">
              </div>

              

              <div class="form-group col-md-3">
                <button type="submit" class="btn btn-primary" style="margin-top: 32px;">Search</button>
                <a href="" class="btn btn-success" style="margin-top: 32px;">Reset</a>
              </div>
              
            </div>
          </div>
          <!-- /.card-body -->
        </form>
      </div>    

    </div>
  </section>



  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
         
        <!-- /.col -->
        <div class="col-md-12">

          @include('_message')

          <!-- /.card -->

          
        
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>



@endsection