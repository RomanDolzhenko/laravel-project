@extends('panel.app')

@section('content')
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Настройки сайта</h3>
        </div>
        <form method="POST" action="{{ route('config.update') }}" >
            @csrf

            <div class="box-body">
                <div class="row" >
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Почтовый код</label>
                            <input type="text" class="form-control" name="zip" value="{{ $config::getConfigByKey('zip') }}">
                        </div>
                        <div class="form-group">
                            <label>Страна</label>
                            <input type="text" class="form-control" name="country" value="{{ $config::getConfigByKey('country') }}">
                        </div>
                        <div class="form-group">
                            <label>Город</label>
                            <input type="text" class="form-control" name="city" value="{{ $config::getConfigByKey('city') }}">
                        </div>
                        <div class="form-group">
                            <label>Улици и номер дома</label>
                            <input type="text" class="form-control" name="street" value="{{ $config::getConfigByKey('street') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Телефон</label>
                            <input type="text" class="form-control" name="phone" value="{{ $config::getConfigByKey('phone') }}">
                        </div>
                        <div class="form-group">
                            <label>Телефон без символов</label>
                            <input type="text" class="form-control" name="clean_phone" value="{{ $config::getConfigByKey('clean_phone') }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $config::getConfigByKey('email') }}">
                        </div>
                        <div class="form-group">
                            <label>Яндекс карта</label>
                            <input type="text" class="form-control" name="yandex" value="{{ $config::getConfigByKey('yandex') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Редактировать</button>
            </div>
        </form>
    </div>
@endsection
