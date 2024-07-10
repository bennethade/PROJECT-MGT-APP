@extends('layouts.app')

@section('content')



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">PROJECTS TRACKER</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-3 col-6">
          <div class="small-box bg-primary">
            <div class="inner">
              {{-- <h3></h3> --}}
              <p>Production of 2024 Corporate</p>
              <h3>17.30</h3>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{ url('admin/fees_collection/collect_fees_repot') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <p>FIRS Policy Review & Update</p>
              <h3>80</h3>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              {{-- <h3></h3> --}}
              <p>XXX</p>
              <h3>38.30</h3>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{ url('admin/fees_collection/collect_fees_repot?created_date_from='.date('Y-m-d').'&created_date_to='.date('Y-m-d').'') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <p>Customer Service Optimization</p>
              <h3>47</h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ url('admin/student/list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-6">
          <div class="small-box" style="background: purple; color:white">
            <div class="inner">
              {{-- <h3></h3> --}}
              <p>Workers Compensation & Welfare Framework</p>
              <h4>65</h4>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        
        <div class="col-lg-3 col-6">
          <div class="small-box" style="background: #e65054; color:white">
            <div class="inner">
              <h3></h3>

              <p>Career & Skills Training Plan</p>
              <h3>140</h3>

            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ url('admin/teacher/list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        
        <div class="col-lg-3 col-6">
          <div class="small-box" style="background: #996800; color:white">
            <div class="inner">
              <h3></h3>
              <p>XXX</p>
              <h3>52</h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ url('admin/parent/list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-6">
          <div class="small-box" style="background: #72aee6; color:white">
            <div class="inner">
              <h3></h3>

              <p>XXX</p>
              <h3>63</h3>

            </div>
            <div class="icon">
              <i class="nav-icon fas fa-table"></i>
            </div>
            <a href="{{ url('admin/examinations/exam/list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3></h3>

              <p>XXX</p>
              <h3>54.78</h3>

            </div>
            <div class="icon">
              <i class="nav-icon fas fa-table"></i>
            </div>
            <a href="{{ url('admin/class/list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-6">
          <div class="small-box bg-secondary">
            <div class="inner">
              {{-- <h3></h3> --}}

              <p>Standard Field Operation Manual</p>
              <h4>92.3</h4>

            </div>
            <div class="icon">
              <i class="nav-icon fas fa-table"></i>
            </div>
            <a href="{{ url('admin/subject/list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-6">
          <div class="small-box" style="background: #2f6050; color:white">
            <div class="inner">
              {{-- <h3></h3> --}}

              <p>Monitoring & Evaluation Framework</p>
              <h4>178.20</h4>

            </div>
            <div class="icon">
              <i class="nav-icon fas fa-table"></i>
            </div>
            <a href="{{ url('admin/communication/notice_board') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-6">
          <div class="small-box" style="background: #d37681; color:white">
            <div class="inner">
              <h3></h3>

              <p>Project Delivery Management</p>
              <h3>569</h3>

            </div>
            <div class="icon">
              <i class="nav-icon fas fa-table"></i>
            </div>
            <a href="{{ url('admin/homework/homework_report') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
      </div>
      
    </div>
  </section>
</div>




@endsection