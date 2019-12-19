@extends('panel.app')

@section('h1', 'Создание новости')

@section('content')
    @parent
    <div class="row recipies-adm">
        <div class="col-md-6">

            <div class="box box-info">
                <div class="box-header with-border"></div>
                <form class="form-horizontal" action="{{ route('news.create') }}" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        @include('panel.news.form')
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Добавить</button>
                        <a href="{{ route('page.list') }}" type="button" class="btn btn-warning pull-right">Назад</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
