@extends('layouts.dashboard.template')

@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Дополнительно</h3>
                </div>
                <div class="col-md-6 col-4 align-self-center">
                    <a href="/option/create" class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</a>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table color-table success-table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Наименование</th>
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td class="actions">
                                                <a href="/option/{{ $item->id }}/edit" class="btn btn-success"><i class="mdi mdi-grease-pencil"></i></a>
                                                <form action="{{url('option', [$item->id])}}" method="POST" style="display: inline;">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger" onclick="return deleteAlert();"><i class="mdi mdi-delete"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $list->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
