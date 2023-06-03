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
            <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">New package</h3>
      
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="#" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="">
                            </div>
    
                            <div class="mb-3">
                                <label for="content" class="form-label">Description</label>
                                <textarea class="form-control" name="desc" id="summernote" rows="3"></textarea>
                            </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control select2" style="width: 100%;" id="hid-elt">
                                        <option selected="selected" value="">Select one</option>
                                        <option>Alaska</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                        <option value="new">New</option>
                                    </select>
                                </div>
    
                                <div class="my-3" id="new-elt">
                                    <input type="text" class="form-control" name="new_category" placeholder="Category Title">
                                </div>
                            <!-- /.form-group -->
    
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="img-preview" style="width: 100%; height:200px; border: 1px solid rgb(32, 31, 31);">
                                        <img src="" alt="" id="pic" class="w-100 h-100">
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
              
                </div>

                
                
            </div>
            <!-- /.card -->

            
        </div>
    </section>

@stop