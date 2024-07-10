@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Project</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- form start -->
              <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Project Name <span style="color: red">*</span> </label>
                            <input type="text" class="form-control" name="name" required placeholder="Project Name" value="{{ old('name') }}">
                            <div style="color: red;">{{ $errors->first('name') }}</div>
                        </div>

                        <div class="form-group col-md-8">
                            <label>Project Manager<span style="color: red">*</span> </label>
                            <input type="text" class="form-control" name="project_manager" required placeholder="Project Manager" value="{{ old('project_manager') }}">
                            <div style="color: red;">{{ $errors->first('project_manager') }}</div>
                        </div>


                        <div class="form-group col-md-4">
                            <label>Expected Date For Delivery<span style="color: red"></span> </label>
                            <input type="date" class="form-control" name="expected_date_for_completion" value="{{ old('expected_date_for_completion') }}">
                            <div style="color: red;">{{ $errors->first('expected_date_for_completion') }}</div>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Percentage Completion<span style="color: red">*</span> </label>
                            <input type="text" class="form-control" name="percentage_completion" required placeholder="First Name" value="{{ old('percentage_completion') }}">
                            <div style="color: red;">{{ $errors->first('percentage_completion') }}</div>
                        </div>

                        
                        <div class="form-group col-md-4">
                            <label>Status <span style="color: red">*</span> </label>
                            <select name="status" id="" class="form-control" required>
                                <option {{ (old('status') == 0) ? 'selected' : '' }}  value="0">Active</option> 
                                <option {{ (old('status') == 1) ? 'selected' : '' }}  value="1">Inactive</option> 
                            </select>
                            <div style="color: red;">{{ $errors->first('status') }}</div>
                        </div>

                    </div>
     
                  
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

          </div>
          
        </div>
      </div>
    </section>
  </div>

@endsection