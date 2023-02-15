@extends('admin_layout.master')

@section('title')
    Pages
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pages</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active">Pages</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tous les Pages</h3>
                            </div>
                            @if (Session::has('status'))
                                <div class="alert alert-success rounded-0">
                                    {{Session::get('status')}}
                                </div>
                            @endif
                            <!-- /.card-header -->
                            <input type="hidden" {{$increment=1}}>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Num.</th>
                                            <th>Image</th>
                                            <th>Titre</th>
                                            <th>Sous-titre</th>
                                            <th>Description courte</th>
                                            <th>Description longue</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pages as $page)
                                            <tr>
                                                <td>{{$increment}}</td>
                                                <td>
                                                    <img src="{{asset('storage/page_images/' .$page->page_image)}}"
                                                        style="height : 50px; width : 80px" class="img-circle elevation-2"
                                                        alt="Page">
                                                </td>
                                                <td>{{$page->page_title}}</td>
                                                <td>{{$page->page_subtitle}}</td>
                                                <td>{{$page->page_shortdescription}}</td>
                                                <td>{{$page->page_longdescription}}</td>
                                                <td class="d-flex">
                                                    @if ($page->status == 1)
                                                        <form action="{{url('admin/unactivatepage/' .$page->id)}}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="submit" class="btn btn-success mr-3" value="Désactiver">
                                                        </form>
                                                        @else
                                                        <form action="{{url('admin/activatepage/' .$page->id)}}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="submit" class="btn btn-warning mr-3" value="Activer">
                                                        </form>                                                    
                                                    @endif
                                                    <a href="{{url('admin/editpage/' .$page->id)}}" class="btn btn-primary mr-3"><i class="nav-icon fas fa-edit"></i></a>
                                                    <form action=" {{url('admin/deletepage/' .$page->id)}} "method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button type="submit" id="delete" class="btn btn-danger"><i
                                                            class="nav-icon fas fa-trash"></i></button>    
                                                    </form>                                                
                                                </td>
                                            </tr>
                                            <input type="hidden" {{$increment++}}>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Num.</th>
                                            <th>Image</th>
                                            <th>Titre</th>
                                            <th>Sous-titre</th>
                                            <th>Description courte</th>
                                            <th>Description longue</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
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
        <!-- /.content -->
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('scripts')
    <script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
          });
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>
@endsection