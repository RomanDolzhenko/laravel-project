@extends('panel.app')

@section('h1', 'Новости')

@section('content')
    @parent
    <div class="row specproject recipies-adm">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <div class="btn-group">
                        <a href="{{ route('news.add') }}">
                            <button type="button" class="btn btn-success pull-right">Добавить</button>
                        </a>
                    </div>
                </div>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                        <thead>
                        <tr role="row">
                            <th >ID</th>
                            <th >Название</th>
                            <th  style="width: 95px;">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($newses as $news)
                                <tr role="row" class="odd">
                                    <td>{{ $news->id }}</td>
                                    <td>
                                        <a href="{{ route('news.edit', $news) }}">{{ $news->title }}</a>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('news.edit', $news) }}" class="btn btn-success">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('news.delete', $news) }}" onclick="return confirm('Вы уверены, что хотите удалить?');" class="btn btn-danger">
                                                <i class="fa fa-remove"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="box-footer clearfix">
            {{ $newses->links() }}
        </div>
    </div>
@endsection

@push('js')
    @parent
    <script>
        $(function () {
            $('#modal-danger').on('show.bs.modal', function (event) {
                $(this).find('.modal-delet-url').prop( 'href', $(event.relatedTarget).data('whatever'));
            });
        })
    </script>
@endpush
