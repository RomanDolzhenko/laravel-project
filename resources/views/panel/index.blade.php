@extends('panel.app')

@section('content')
    <div class="row">

        <div class="col-md-2 col-sm-4 col-xs-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Счетчики посещений</h3>
                </div>

                <script type="text/javascript">
                    document.write('<a href="//www.liveinternet.ru/click" '+
                        'target="_blank"><img src="//counter.yadro.ru/hit?t27.6;r'+
                        escape(document.referrer)+((typeof(screen)=='undefined')?'':
                            ';s'+screen.width+'*'+screen.height+'*'+(screen.colorDepth?
                            screen.colorDepth:screen.pixelDepth))+';u'+escape(document.URL)+
                        ';h'+escape(document.title.substring(0,150))+';'+Math.random()+
                        '" alt="" title="LiveInternet: показано количество просмотров и'+
                        ' посетителей" '+
                        'border="0" width="88" height="120"><\/a>')
                </script>
            </div>
        </div>

    </div>
@endsection
