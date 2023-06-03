@extends('../layouts/dashboardLayout')
@section('title','Dashboard | Articles')
@section('navigation')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Dashboard </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Articles </li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>#Id</th>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Author</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($articles as $article)
                      <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->category->title}}</td>
                        <td>{{$article->author->name}}</td>
                        <td><a href="{{'update/'.$article->id}}" class="text-primary text-decoration-none mx-3">[Update]</a><a href="#" class="text-danger text-decoration-none">[Delete]</a></td>
                      </tr>
                      @endforeach
                    
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>#Id</th>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Author</th>
                      <th>Actions</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
            </div>
              <!-- /.card -->
        </div>
    </section>

    <!-- Page specific script -->
    

@stop