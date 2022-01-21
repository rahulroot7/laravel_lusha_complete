@extends('admin.layouts.master')
 @section('content')

<!-- Main content -->
    <section class="content p-2 p-md-4">
      <div class="container-fluid">
        <div class="row mb-2 align-items-center">
          <div class="col-sm-6 col-4">
            <h4>All Career</h4>
          </div>
          <div class="col-sm-6 col-8">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Career List </li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card table-responsive">
              <div class="card-header header-bg">
                <h3 class="card-title">All Career list</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                @if (session('success'))
                  <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if (session('unsuccess'))
                    <p class="alert alert-danger">{{ session('unsuccess') }}</p>
                @endif
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Apply Position</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Linkedin</th>
                    <th>Web url</th>
                    <th>Message</th>
                    <th>Resume</th>
                    <th>Cover Letter</th>
                    <th>Portfolio</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php($count = 0)
                    @foreach($career_list as $career_lists)
                        @php($count++)
                      <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $career_lists->apply_position }}</td>
                        <td>{{ $career_lists->name }}</td>
                        <td>{{ $career_lists->last_name }}</td>
                        <td>{{ $career_lists->email }}</td>
                        <td>{{ $career_lists->phone }}</td>
                        <td>{{ $career_lists->linkedin_url }}</td>
                        <td>{{ $career_lists->web_url }}</td>
                        <td>{{ $career_lists->description }}</td>
                        <td><a href="{{ url('public/upload/career/document',$career_lists->resume) }}" download><i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i>
                        	{{ $career_lists->resume }}</i></a>
                        </td>
                        <td>
                        	@if($career_lists->coverletter)
                        	<a href="{{ url('public/upload/career/document',$career_lists->coverletter) }}" download><i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i>
                        	{{ $career_lists->coverletter }}</a>
                        	@endif
                        </td>
                        <td>
                        	@if($career_lists->portfolio)
                        	<a href="{{ url('public/upload/career/document',$career_lists->portfolio) }}" download><i class="fa fa-file-pdf-o" style="font-size:48px;color:red"></i>
                        	{{ $career_lists->portfolio }}</a>
                        	@endif
                        </td>
                        <?php
                        	$updated_at = $career_lists->updated_at;
                        	$date = date('F d,Y',strtotime($updated_at));
                         ?>
                        <td>{{ $date }}</td>
                        <td>
                          <a class="btn btn-danger btn-sm ml-2" href="{{ url('admin/career-user-delete',$career_lists->id) }}"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                      </tr>
                    @endforeach
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

  </div>
  <!-- /.content-wrapper -->
 @endsection
