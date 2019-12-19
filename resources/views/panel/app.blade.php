<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Административная панель</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/css/admin/font-awesome.min.css">
    <link rel="stylesheet" href="/css/admin/ionicons.min.css">
    <link rel="stylesheet" href="/css/admin/style.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <a href="index2.html" class="logo" target="_blank">
            <span class="logo-lg"><b>Агро Олимп</b></span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="{{ route('logout') }}" style="padding: 8px">
                            <button type="button" class="btn btn-danger">Выйти</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @include('panel.sidebar')

    <div class="content-wrapper">
        <section class="content">
            <h1>@yield('h1', 'Панель Управления')</h1>

            @yield('content')
        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.13
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
        reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
</div>

<script src="/js/admin/libs.min.js"></script>
<script src="/js/admin/script.js"></script>

@stack('js')

@include('panel.block.alerts.alert')

</body>
</html>
