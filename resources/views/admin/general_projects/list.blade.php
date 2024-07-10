@extends('layouts.app')

@section('content')



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Project List : () Total Projects</h1>
        </div>
        <div class="col-sm-6" style="text-align: right;">
          <a href="{{ route('general_projects.add') }}" class="btn btn-primary">Add New Project</a>
          
        </div>
        
      </div>
    </div>
  </section>



  <section class="content">
    <div class="container-fluid">
      
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Search Project</h3>
        </div>
        
        <form method="get" action=" ">
          <div class="card-body">
            <div class="row">
              <div class="form-group col-md-6">
                <label>Search Project Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Project Name" value="{{ Request::get('name') }}">
              </div>

              {{-- <div class="form-group col-md-2">
                <label>Surname</label>
                <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" value="{{ Request::get('last_name') }}">
              </div> --}}


              {{-- <div class="form-group col-md-2">
                <label>Gender</label>
                <select name="gender" id="" class="form-control">
                  <option value="">Select Gender</option> 
                  <option {{ (Request::get('gender') == 'Male') ? 'selected' : '' }} value="Male">Male</option> 
                  <option {{ (Request::get('gender') == 'Female') ? 'selected' : '' }} value="Female">Female</option> 
                  <option {{ (Request::get('gender') == 'Other') ? 'selected' : '' }} value="Other">Other</option> 
              </select>
              </div> --}}


              {{-- <div class="form-group col-md-2">
                <label>Status</label>
                <select name="status" id="" class="form-control">
                  <option value="">Select Status</option> 
                  <option {{ (Request::get('status') == 100) ? 'selected' : '' }} value="100">Active</option> 
                  <option {{ (Request::get('status') == 1) ? 'selected' : '' }} value="1">Inactive</option> 
              </select>
              </div> --}}

              {{-- <div class="form-group col-md-2">
                <label>Admission Date</label>
                <input type="date" class="form-control" name="admission_date"  value="{{ Request::get('admission_date') }}">
              </div> --}}


              {{-- <div class="form-group col-md-2">
                <label>Created Date</label>
                <input type="date" class="form-control" name="date" value="{{ Request::get('date') }}">
              </div> --}}

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

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">General Project List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0" style="overflow: auto;">
              <table class="table table-striped">
                <thead style="background-color: red; color: white;">
                  <tr>
                    <th>S/N</th>
                    <th>Project Name</th>
                    <th>Project Manager</th>
                    <th>Expected Date for Completion</th>
                    <th>% Completed</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @php
                    $id = 1
                  @endphp

                  @foreach ($getRecord as $value)
                    <tr>
                      <td>{{ $id++ }}</td>
                      <td style="min-width: 200px;">{{ $value->name }}</td>
                      <td>{{ $value->project_manager }}</td>
                      <td>{{ $value->expected_date_for_completion }}</td>
                      <td>{{ $value->percentage_completion }}</td>
                      
                      <td style="min-width: 250px;">
                        <a href="{{ route('general_projects.view_project', [$value->id]) }}" class="btn btn-primary btn-sm">View Project</a>
                        <a href="{{ route('general_projects.edit', [$value->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                        {{-- <a href="{{ url('/admin/general_projects/edit/'.$value->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                        {{-- <a href="{{ url('admin/student/edit'.$value->id) }}" class="btn btn-primary">Edit</a> --}}
                        <a href="{{ url('admin/student/delete/'.$value->id) }}" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

              <div style="padding: 10px; float: right;">
                {{-- {{ $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() }} --}}

                {{-- {{ $getRecord->links() }} --}}


                {{--
                  GO TO APPSERVICEPROVIDER AND ADD THE CODE BELOW FOR THIS PAGINATION TO WORK PROPERLY


                    public function boot(): void
                    {
                        paginator::useBootstrap();
                    }
                --}}
              </div>

            </div>
            <!-- /.card-body -->
          </div>
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