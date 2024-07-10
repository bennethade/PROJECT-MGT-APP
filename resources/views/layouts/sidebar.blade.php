{{-- Sidebar --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('login') }}" class="brand-link" style="text-align: center;">
      {{-- @if (!empty($getHeaderSetting->getLogo()))
        <img src="{{ $getHeaderSetting->getLogo() }}" alt="" style="width:auto; height:40px; border-radius: 5px;" class="brand-image img-rounded elevation-3" style="opacity: .8">
        <span class="brand-text" style="font-size: 20px; font-weight:bold;">SMS</span>
      @else
        <img src="{{ asset('dist/img/benjas_logo_white.png') }}" alt="Benjas Logo" class="brand-image img-rounded elevation-3" style="opacity: .8"> 
        <span class="brand-text" style="font-size: 20px; font-weight:bold;">SMS</span>
      @endif --}}
      {{-- <img src="{{ asset('dist/img/benjas_logo_white.png') }}" alt="Benjas Logo" class="brand-image img-rounded elevation-3" style="opacity: .8">  --}}
        <span class="brand-text" style="font-size: 20px; font-weight:bold;">PROJECT SYSTEM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="{{ Auth::user()->getProfileDirect() }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}"> --}}
          {{-- @if (!empty(Auth::user()->profile_picture))
              <img src="{{ asset('upload/profile') }}/{{ Auth::user()->profile_picture }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
          @else
              <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
          @endif
           --}}
        </div>
        <div class="info">
          {{-- <a href="{{ route('login') }}" class="d-block">{{ Auth::user()->name }}</a> --}}
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



               {{-- SIDEBAR FOR ADMIN --}}
               {{-- @if (Auth::user()->user_type == 1 || Auth::user()->user_type == 'Super Admin')
                { --}}
                  {{-- <li class="nav-header">Dashboard</li> --}}
                    <li class="nav-item">
                      <a href="{{ url('admin/dashboard') }}"  class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard 
                        </p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{ url('admin/admin/list') }}" class="nav-link @if(Request::segment(2) == 'admin') active @endif">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                          Admin
                        </p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{ url('admin/general_projects/list') }}" class="nav-link @if(Request::segment(2) == 'general_projects') active @endif">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                          General Projects
                        </p>
                      </a>
                    </li>


                    <li class="nav-item">
                      <a href="{{ url('admin/people/list') }}" class="nav-link @if(Request::segment(2) == 'people') active @endif">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                          People
                        </p>
                      </a>
                    </li>


                    <li class="nav-item">
                      <a href="{{ url('admin/technology/list') }}" class="nav-link @if(Request::segment(2) == 'technology') active @endif">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                          Technology
                        </p>
                      </a>
                    </li>


                    <li class="nav-item">
                      <a href="{{ url('admin/process/list') }}" class="nav-link @if(Request::segment(2) == 'process') active @endif">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                          Process
                        </p>
                      </a>
                    </li>


                    <li class="nav-item @if(Request::segment(2) == 'class' || Request::segment(2) == 'subject' || Request::segment(2) == 'assign_subject' || Request::segment(2) == 'assign_student' || Request::segment(2) == 'subject_teacher' || Request::segment(2) == 'assign_class_teacher' || Request::segment(2) == 'class_timetable' || Request::segment(2) == 'promote_students') menu-is-opening menu-open @endif">
                      <a href="#" class="nav-link @if(Request::segment(2) == 'class' || Request::segment(2) == 'subject' || Request::segment(2) == 'assign_subject' || Request::segment(2) == 'assign_student' || Request::segment(2) == 'subject_teacher' || Request::segment(2) == 'assign_class_teacher' || Request::segment(2) == 'class_timetable' || Request::segment(2) == 'promote_students') active @endif">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                          Functions
                          <i class="fas fa-angle-left right"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">

                        <li class="nav-item">
                          <a href="{{ url('admin/project_management') }}" class="nav-link @if(Request::segment(2) == 'assign_student') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Project Management</p>
                          </a>
                        </li>


                        <li class="nav-item">
                          <a href="{{ url('admin/portfolio_management') }}" class="nav-link @if(Request::segment(2) == 'subject_teacher') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Portfolio Management</p>
                          </a>
                        </li>


                        <li class="nav-item">
                          <a href="{{ url('admin/people_management/list') }}" class="nav-link @if(Request::segment(2) == 'assign_class_teacher') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>People Management</p>
                          </a>
                        </li>

                        <li class="nav-item">
                          <a href="{{ url('admin/technology_management') }}" class="nav-link @if(Request::segment(2) == 'promote_students') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Technology Management</p>
                          </a>
                        </li>

                        <li class="nav-item">
                          <a href="{{ url('admin/process_management/list') }}" class="nav-link @if(Request::segment(2) == 'class_timetable') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Process Management</p>
                          </a>
                        </li>

                        <li class="nav-item">
                          <a href="{{ url('admin/reporting_analysis/list') }}" class="nav-link @if(Request::segment(2) == 'class_timetable') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Reporting & Analytics</p>
                          </a>
                        </li>

                      </ul>
                    </li>



                    <li class="nav-item">
                      <a href="{{ url('admin/account') }}" class="nav-link @if(Request::segment(2) == 'account') active @endif">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                          Update My Account
                        </p>
                      </a>
                    </li>



                    <li class="nav-item">
                      <a href="{{ url('admin/setting') }}" class="nav-link @if(Request::segment(2) == 'setting') active @endif">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                          System Setting
                        </p>
                      </a>
                    </li>


                    <li class="nav-item">
                      <a href="{{ url('admin/change_password') }}" class="nav-link @if(Request::segment(2) == 'change_password') active @endif">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                          Change Password
                        </p>
                      </a>
                    </li>

                {{-- } --}}




               {{-- @endif --}}
          
          

          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>