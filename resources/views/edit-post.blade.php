@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Post</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <p>
                    <a href="{{ route('allpost') }}">All post</a> / Edit post
                </p>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col col-md-6 ">
                                <i style="font-size:16px" class="fa"></i>

                                Edit Post
                            </div>
                            <div class="col col-md-6" align="right">

                            </div>
                        </div>

                    </div>
                    <div class="card-body">


                        <form method="post" action="{{ route('editpostedit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-7">
                                <label for="">Category</label><br>
                                <select name="category" id="CategoryValue">
                                    <option value="laravel">Laravel</option>
                                    <option value="vuejs">Vue js</option>
                                    <option value="php">PHP</option>
                                    <option value="javascript">Javascript</option>
                                </select>
                            </div>
                            <br>
                            <div class="col-md-7">
                                <label for="title">Blog Title</label>
                                <input class="form-control" id="title" type="text" name="title" placeholder="Blog Title"
                                    required value="{{ $posts->title }}">
                            </div>
                            <br>
                            <div class="col-md-7">
                                <label for="imageFile">Change Image</label>
                                <input type="file" name="image" id="imageFile" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">

                                <div class="col-md-8">
                                    <label for="">description</label>
                                    <textarea class="ckeditor form-control" name="editor" >{{ $posts->description }}</textarea  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="submit" value="Publish" class="btn btn-info">
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                                <br><br>
                                                <!-- /.row -->
                                            </div><!-- /.container-fluid -->
                                        </div>
                                        <!-- /.content -->
                                    </div>
                                    <!-- /.content-wrapper -->
@endsection
@section('add-js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $('#allpost').addClass('active')
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
        </script>
        <script type="text/javascript">
            CKEDITOR.replace('editor', {
                filebrowserUploadUrl: "{{ route('ckeditor.image-upload', ['_token' => csrf_token()]) }}",
                filebrowserUploadMethod: 'form'
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#CategoryValue').val('{{ $posts->category }}');
            })
        </script>
@endsection
