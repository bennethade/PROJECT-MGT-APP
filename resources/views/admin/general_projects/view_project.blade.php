@extends('layouts.app')

@section('content')



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>Project Name: {{ $getRecord->name }}</h4>
          <h4>Project Manager: {{ $getRecord->project_manager }}</h4>
        </div>
        <div class="col-sm-6" style="text-align: right;">
            <h5>Expected Date For Completion: {{ $getRecord->expected_date_for_completion }}</h5>
            <h5>% Completion: {{ $getRecord->percentage_completion }}</h5>
          {{-- <a href="{{ route('general_projects.add') }}" class="btn btn-primary">Add New Project</a> --}}
          
        </div>
        
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
              <h3 class="card-title">Project Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0" style="overflow: auto;">
              <table class="table table-striped">
                <thead style="background-color: red; color: white;">
                  <tr>
                    <th>S/N</th>
                    <th>Activities</th>
                    <th>Details</th>
                    <th>Expected Outcomes</th>
                    <th>Necessary Actions</th>
                    <th>Task Lead</th>
                    <th>Additional Support Needed</th>
                    <th>Status (%)</th>
                    <th>Timeline</th>
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