@extends('admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Create Tag</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('website') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('tag.index') }}">Tag List</a></li>
          <li class="breadcrumb-item active">Create Tag</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card">
            <div class="card-header">
              <div class="d-flex justify-content-between align-content-center">
                  <h3 class="card-title">Tag List</h3>
                  <a href="{{ route('tag.index') }}" class="btn btn-primary" >Go Back to Tag List</a>
              </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                  <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                      <form action="{{ route('tag.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                          @include('includes.errors')
                          <div class="form-group">
                            <label for="name">Tag name</label>
                            <input type="name" class="form-control" id="name" name="name" placeholder="Enter name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="5" placeholder="Enter description"></textarea>
                          </div>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection()

@section('style')
    <link rel="stylesheet" href="{{ asset('/admin/css/summernote-bs4.min.css') }}">
@endsection

@section('script')
    <script src="{{ asset('/admin/js/summernote-bs4.min.js') }}"></script>
    <script>
        $('#description').summernote({
            placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 300
        });
    </script>
@endsection
