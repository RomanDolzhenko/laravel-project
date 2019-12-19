@extends('panel.app')

@section('h1', 'Редактирование новости')

@section('content')
    @parent
    <div class="row recipies-adm">
        <div class="col-md-6 col-sm-12">

            <div class="box box-info">
                <form class="form-horizontal" action="{{ route('news.update', $news) }}" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        @include('panel.news.form')
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                        <a href="{{ route('news.list') }}" type="button" class="btn btn-warning pull-right">Назад</a>
                    </div>

                </form>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            @include('panel.block.seo', [
                'model' => $news
            ])
        </div>
    </div>
@endsection
