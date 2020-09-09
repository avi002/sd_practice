@extends('admin.layouts.default')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Products</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Products</li>
            </ol>
            <div class="table-responsive">
                <table id="productTbl" class="table table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Category</th>
                    </thead>
                    <tbody>
                        @foreach ($products as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->title}}</td>
                            <td>{{$p->status}}</td>
                            <td>{{$p->category}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
                
        </div>
    </main>
@stop

@section('myscript')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('ui/admin/assets/demo/datatables-demo.js')}}"></script>  --}}
    <script>
        $(document).ready( function () {
        $('#productTbl').DataTable();
    } );
    </script>
    
@stop