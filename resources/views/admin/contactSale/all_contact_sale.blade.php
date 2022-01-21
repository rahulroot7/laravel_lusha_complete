@extends('admin.layouts.master')
 @section('content')

<!-- Main content -->
    <section class="content p-2 p-md-4">
      <div class="container-fluid">
        <div class="row mb-2 align-items-center">
          <div class="col-sm-6 col-4">
            <h4>Plan List</h4>
          </div>
          <div class="col-sm-6 col-8">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Plan List </li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card table-responsive">
              <div class="card-header header-bg">
                <h3 class="card-title">All Plan list</h3>
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
                    <th>Name</th>
                    <th>Contact No.</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php($count = 0)
                    @foreach($contact_sale as $contact)
                        @php($count++)
                      <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $contact->user_name }}</td>
                        <td>{{ $contact->phone_number }}</td>
                        <td>{{ $contact->message }}</td>
                        <td class="edit-delete-btn">
                        <form action="{{ url('admin/contactSale/activate',$contact->id) }}" method="POST">
                           @csrf
                           <select name="status">
                           	@if($contact->status)
                           	<option value="{{$contact->status}}"><i class="fa fa-check"></i>{{ $contact->status}}</option>
                           	@else
                           	<option value="default"><i class="fa fa-check"></i>status</option>
                           	@endif
                           	<option value="Active"><i class="fa fa-check"></i>Activate</option>
                       		<option value="InActive"><i class="fa fa-check"></i>InActivate</option>
                           </select>
                        	<button type="submit" class="btn btn-primary btn btn-sm"></i>Submit</button>
                        </form>
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
