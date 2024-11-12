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
                    <h3 class="text-themecolor m-b-0 m-t-0">Добавить товар</h3>
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
                            <form action="{{url('users', [$user->id])}}" method="POST" class="form-horizontal form-material" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}

                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-md-12">Тип записи</label>
                                    <div class="col-md-12">
                                        <select class="form-control form-control-line select2" name="type">
                                            <option>Выберите категорию</option>
                                            <option value="1" @if(old('type',$user->type) == 1) selected @endif>Врач</option>
                                            <option value="2" @if(old('type',$user->type) == 2) selected @endif>Администратор сайта</option>
                                        </select>
                                        @if ($errors->has('type'))
                                            <span class="help-block text-danger"><small>{{ $errors->first('type') }}</small></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">ФИО</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ old('name',$user->name) }}" name="name" class="form-control form-control-line">
                                        @if ($errors->has('name'))
                                            <span class="help-block text-danger"><small>{{ $errors->first('name') }}</small></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Почта</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ old('email',$user->email) }}" name="email" class="form-control form-control-line">
                                        @if ($errors->has('email'))
                                            <span class="help-block text-danger"><small>{{ $errors->first('email') }}</small></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Должность и достижение</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control form-control-lin"  name="job_title" rows="6"  id="editor">{{ old('job_title',$user->job_title) }}</textarea>
                                    </div>
                                    @if ($errors->has('job_title'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('job_title') }}</small></span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Описание</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control form-control-lin"  name="text" rows="6"  id="editor">{{ old('text', $user->text) }}</textarea>
                                    </div>
                                    @if ($errors->has('text'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('text') }}</small></span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Сортировка(порядок отображение на главной странице)</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ old('sort',$user->sort) }}" name="sort" class="form-control form-control-line">
                                        @if ($errors->has('sort'))
                                            <span class="help-block text-danger"><small>{{ $errors->first('sort') }}</small></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Фотография</label>
                                    <div class="col-md-12">
                                        <input type="hidden" value="{{ $user->photo }}" name="photo">
                                        <input type="file" name="photo" class="form-control form-control-line">
                                        @if ($errors->has('photo'))
                                            <span class="help-block text-danger"><small>{{ $errors->first('photo') }}</small></span>
                                        @endif

                                        @if(isset($user->photo))
                                            <img src="{{ asset($user->photo) }}" style=" width: 200px;padding: 10px; height: 150px;float: right;object-fit: contain;">
                                        @endif
                                        @if ($errors->has('photo'))
                                            <span class="help-block text-danger"><small>{{ $errors->first('photo') }}</small></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Ключевые слово(для SEO, через запятое)</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ old('meta_keywords',$user->meta_keywords) }}" name="meta_keywords" class="form-control form-control-line">
                                        @if ($errors->has('meta_keywords'))
                                            <span class="help-block text-danger"><small>{{ $errors->first('meta_keywords') }}</small></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Мини описание(для SEO)</label>
                                    <div class="col-md-12">
                                        <input type="text" value="{{ old('meta_description',$user->meta_description) }}" name="meta_description" class="form-control form-control-line">
                                        @if ($errors->has('meta_description'))
                                            <span class="help-block text-danger"><small>{{ $errors->first('meta_description') }}</small></span>
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
