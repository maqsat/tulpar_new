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
                <h3 class="text-themecolor m-b-0 m-t-0">Добавить запись</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <div class="col-md-6 col-4 align-self-center">
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
                @foreach ($errors->all() as $error)
                    <span class="help-block text-danger"><small>{{ $error }}</small></span>
                @endforeach
                <div class="card">
                    <div class="card-block">
                        <form action="{{url('services')}}" method="POST" class="form-horizontal form-material" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-md-12">Услуга</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ old('title') }}" name="title" class="form-control form-control-line">
                                    @if ($errors->has('title'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('question') }}</small></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Родительская категория</label>
                                <div class="col-md-12">
                                    <select class="form-control form-control-line select2"  name="parent_id">
                                        @foreach(\App\Models\Service::where('parent_id',0)->get() as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if ($errors->has('parent_id'))
                                    <span class="help-block text-danger"><small>{{ $errors->first('parent_id') }}</small></span>
                                @endif
                            </div>


                            <div class="form-group">
                                <label class="col-md-12">Сортировка(порядок отображение на главной странице)</label>
                                <div class="col-md-12">
                                    <input type="number" value="{{ old('sort', $last_sort->id+1) }}" name="sort" class="form-control form-control-line">
                                    @if ($errors->has('sort'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('sort') }}</small></span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="submit">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
