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
                        <form action="{{url('posts')}}" method="POST" class="form-horizontal form-material" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-12">Категория товара</label>
                                <div class="col-md-12">
                                    <select class="form-control form-control-line select2" name="type">
                                        @foreach(\App\Models\Service::where('parent_id','!=',0)->get() as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('category_id') }}</small></span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Наименование</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ old('title') }}" name="title" class="form-control form-control-line">
                                    @if ($errors->has('title'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('title') }}</small></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Цена</label>
                                <div class="col-md-12">
                                    <input type="number" value="{{ old('cost') }}" name="cost" class="form-control form-control-line">
                                    @if ($errors->has('cost'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('cost') }}</small></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Описание</label>
                                <div class="col-md-12">
                                    <textarea class="form-control form-control-lin"  name="text" rows="6"  id="editor">{{ old('text') }}</textarea>
                                </div>
                                @if ($errors->has('text'))
                                    <span class="help-block text-danger"><small>{{ $errors->first('text') }}</small></span>
                                @endif
                            </div>


                            <div class="form-group">
                                <label class="col-md-12">Модель</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ old('model') }}" name="model" class="form-control form-control-line">
                                    @if ($errors->has('model'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('model') }}</small></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Материал</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ old('material') }}" name="material" class="form-control form-control-line">
                                    @if ($errors->has('material'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('material') }}</small></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Цвет</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ old('color') }}" name="color" class="form-control form-control-line">
                                    @if ($errors->has('color'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('color') }}</small></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Рост</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ old('height') }}" name="height" class="form-control form-control-line">
                                    @if ($errors->has('height'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('height') }}</small></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Размеры</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ old('size') }}" name="size" class="form-control form-control-line">
                                    @if ($errors->has('size'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('size') }}</small></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Сезон</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ old('season') }}" name="season" class="form-control form-control-line">
                                    @if ($errors->has('season'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('season') }}</small></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Защита</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ old('protection') }}" name="protection" class="form-control form-control-line">
                                    @if ($errors->has('protection'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('protection') }}</small></span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-12">Сортировка(порядок отображение на главной странице)</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ old('sort') }}" name="sort" class="form-control form-control-line">
                                    @if ($errors->has('sort'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('sort') }}</small></span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-12">Картинка</label>
                                <div class="col-md-12">
                                    <input type="file" name="photo" class="form-control form-control-line">
                                    @if ($errors->has('photo'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('photo') }}</small></span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-12">Ключевые слово(для SEO, через запятое)</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ old('meta_keywords') }}" name="meta_keywords" class="form-control form-control-line">
                                    @if ($errors->has('meta_keywords'))
                                        <span class="help-block text-danger"><small>{{ $errors->first('meta_keywords') }}</small></span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Мини описание(для SEO)</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{ old('meta_description') }}" name="meta_description" class="form-control form-control-line">
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
