@extends('admin_layout.master')

@section('title')
    Modifier un article
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Article</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Article</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Modifier l'article</h3>
                            </div>
                            <!-- /.card-header -->
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::has('status'))
                                <br>
                                <div class="alert alert-success rounded-0">
                                    {{Session::get('status')}}
                                </div>
                            @endif
                            <!-- form start -->
                            <form id="quickForm" action=" {{url('admin/updatearticle', $article->id)}} " method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Titre</label>
                                        <input type="text" name="article_title" value="{{$article->article_title}}" class="form-control"
                                            id="exampleInputEmail1" placeholder="Modifier le titre" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description courte</label>
                                        <input  name="article_shortdescription" class="form-control" id="article_shortdescription" cols="100%" rows="10" placeholder="Modifier la description courte" value="{{$article->article_shortdescription}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description longue</label>
                                        <textarea  name="article_longdescription" class="form-control" id="article_longdescription" cols="100%" rows="10" placeholder="Modifier la description longue" required>{{$article->article_longdescription}}</textarea>
                                    </div>
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="article_image" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choisir une nouvelle image</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Téléverser</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                                    <input type="submit" class="btn btn-primary" value="Mettre à jour">
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection