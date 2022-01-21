@extends('admin.layouts.master')
 @section('content')

<!-- Main content -->
    <section class="content p-2 p-md-4">
      <div class="container-fluid">
        <div class="row mb-2 align-items-center">
          <div class="col-sm-6 col-4">
            <h4>Category</h4>
          </div>
          <div class="col-sm-6 col-8">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Category List </li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card table-responsive">
               <div class="card-header ">
               <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CategoryModal">
                    Create Category
                  </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="CategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <form action="{{ url('admin/blog/create-category') }}" method="POST">
                           @csrf
                      <label for="listname" class="form-label">Category name</label>
                      <input type="text" class="form-control" name="category" id="category">
                      <label for="exampleFormControlTextarea1" class="form-label">Sort Description</label>
                      <textarea class="form-control" name="message" placeholder="abc..." rows="3"></textarea>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                      </div>
                    </form>
                    </div>
                    </div>
                  </div>
                </div>



              <div class="card-header header-bg">
                <h3 class="card-title">All Category list</h3>
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
                    <th>Category</th>
                    <th>Description</th>
                    <th>Total Post</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php($count = 0)
                      @foreach($count_blog as $all_blog)
                        @php($count++)
                      <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $all_blog['category_name']}}</td>
                        <td>{{ $all_blog['sort_desc']}}</td>
                        <td>{{ $all_blog['category_blog_list_count']}}</td>

                        <td class="edit-delete-btn">
                          <button type="button" class="btn btn-primary CategoryEditModal" value="{{ $all_blog['id'] }}">
                            <i class="fas fa-pencil-alt"></i> Edit</button>

                          <a class="btn btn-danger btn-sm ml-2" href="{{ url('admin/category-delete',$all_blog['id']) }}"></i> Delete</a>
                        </td>
                       
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>

              <!-- Modal -->
                <div class="modal fade" id="CategoryEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <form action="{{ url('admin/update-category') }}" method="POST">
                           @csrf
                      <label for="listname" class="form-label">Category name</label>
                      <input type="hidden" name="id" value="" id="id">
                      <input type="text" class="form-control" value="" name="category" id="category_name" >
                      <label for="exampleFormControlTextarea1" class="form-label">Sort Description</label>
                      <textarea class="form-control" name="message" id="message" placeholder="abc..." rows="3"></textarea>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                    </div>
                    </div>
                  </div>
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

@endsection
