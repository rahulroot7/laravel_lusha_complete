@extends('admin.layouts.master') 
@section('content')
    <!-- Main content -->
    <section class="content p-2 p-md-4">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                <div class="top-title pb-2 pb-md-4">
                    <h4> Edit Career Position  </h4>
                </div>
            </div>
          </div>
          <!--2-->
          <div class="row mb-4">
            <div class="col-lg-12  col-md-12 col-12">
            <div class="message-alert">
                @if (session('success'))
                  <p class="alert alert-success text-center">{{ session('success') }}</p>
              @endif
               @if (session('unsuccess'))
                  <p class="alert alert-danger text-center">{{ session('unsuccess') }}</p>
              @endif
              </div>
            <div class="card">
              <div class="card-header header-bg">
                <h3 class="card-title">Edit Career Information</h3>
              </div>
             <form method="post" action="{{ route('career.update',$id->id) }}" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')

              <div class="card-body">
              	   <div class="form-group">
                    <label for="inputName">Icon</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputName">Career Title</label>
                    <input type="text" name="career_title" value="{{ $id->career_title }}" id="inputName" class="form-control @error('career_title') is-invalid @enderror">
                    @error('career_title')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputName">Career Category</label>
                    <input type="text" name="career_category" value="{{ $id->career_category }}" id="inputName" class="form-control @error('career_category') is-invalid @enderror">
                    @error('career_category')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                   <div class="form-group">
                    <label for="inputName">Career Location</label>
                    <input type="text" name="career_location" value="{{ $id->career_location }}" id="inputName" class="form-control @error('career_location') is-invalid @enderror">
                    @error('career_location')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
               
                <div class="form-group">
                  <label for="page_description">Career Description</label>
                  <textarea id="page_description" name="description"  class="form-control @error('plane_name') is-invalid @enderror">{{ $id->description }}
                </textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                  <div class="row">
                    <div class="col-12">
                      <input type="submit" value="Update" class="btn btn-main">
                    </div>
                  </div>

                    </div>
                  </div>
                </div>
              </div>
    
          </div>
    </section>
@endsection