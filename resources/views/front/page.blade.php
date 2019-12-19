<!DOCTYPE html>
<html lang="ru">
    @include('front.block.head')

    <body>
        <div class="body-wrapper">
            @yield('page')

            @include('front.block.footer')
        </div>

        <div class="overlay js-modal-overlay"></div>

        <script src="@js(libs.min.js)"></script>
        <script src="@js(js.js)"></script>

        @stack('js')
    </body>
</html>

