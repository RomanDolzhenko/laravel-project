<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Навигация</li>

            <li class="">
                <a href="{{ route('panel') }}"> <i class="fa fa-home"></i> <span>Главная</span> </a>
            </li>

            <li class="{{ active([ 'config.*' ]) }}">
                <a href="{{ route('config.list') }}"> <i class="fa fa-cogs"></i> <span>Настройки</span> </a>
            </li>

            <li class="{{ active([ 'page.*' ]) }}">
                <a href="{{ route('page.list') }}"> <i class="fa fa-files-o"></i> <span>Страницы</span> </a>
            </li>

            <li class="{{ active([ 'news.*' ]) }}">
                <a href="{{ route('news.list') }}"> <i class="fa fa-newspaper-o"></i> <span>Новости</span> </a>
            </li>

            <li class="treeview {{ active([ 'category.*' ]) }}">
                <a href="#">
                    <i class="fa fa-clone"></i> <span>Категории</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ active([ 'category.list' ]) }}">
                        <a href="{{ route('category.list') }}"><i class="fa fa-circle-o"></i>Категории</a>
                    </li>
                    <li class="{{ active([ 'category.categories' ]) }}">
                        <a href="{{ route('category.categories') }}"><i class="fa fa-circle-o"></i>Подкатегории</a>
                    </li>
                </ul>
            </li>

            <li class="{{ active([ 'product.*' ]) }}">
                <a href="{{ route('product.list') }}"> <i class="fa fa-product-hunt"></i> <span>Товары</span> </a>
            </li>

            <li class="{{ active(['event.list']) }}">
                <a href="{{ route('event.list') }}"> <i class="fa fa-users"></i> <span>События и клиенты</span> </a>
            </li>

            <li class="{{ active(['event.callback']) }}">
                <a href="{{ route('event.callback') }}"> <i class="fa fa-comments-o"></i> <span>Обратная связь</span> </a>
            </li>
        </ul>
    </section>
</aside>
