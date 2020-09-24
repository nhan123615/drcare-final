@extends('admin/layouts/app')

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
<div class="col-md-12">

             <!-- general form elements -->
   <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Titles</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @include('includes.messages')
  <form role="form" action="" method="post">
    {{csrf_field()}}
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="card-body">
                <div class="col-lg-10" >
                    <div class="form-group">
                        <label for="name">Tag Title</label>
                        <input type="text" class="form-control" id="name" placeholder="Tag Title" name="name">
                      </div>
              
                  
                      <div class="form-group">
                        <label for="slug">Tag Slug</label>
                        <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug">
                      </div>
        
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      <a class="btn btn-warning" href="">Back</a>
                      </div>
                </div>        
               {{--  <div class="col-lg-1"></div> --}}
        </div>
    </form>
  </div>
  <!-- /.card -->

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection