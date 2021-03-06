<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__body">
                <a href="#" class="header__logo">
                    <img class="logo" src="{{ asset('image/logo.svg') }}" alt="logo">
                </a>
                <div class="header__burger">
                    <span></span>
                </div>
                <nav class="header__menu">
{{--                    <ul class="header__list">--}}
{{--                        <li>--}}
{{--                            <a href="#" class="header__link">Каталог</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="header__link mx-lg-4">О нас</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="header__link">Как мы работаем?</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="header__link ml-lg-4">Контакты</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                    <ul class="header__list" id="pick" style="padding-left: 0px;">
                        <li class="nav-header">
                            <a href="#main" class="header__link"><img class="nav-header pr-2"  src="{{ asset('icons/home_icon.svg') }}" alt="">Главная</a>
                        </li>
                        <li>
                            <a href="#catalog" class="header__link"><img class="nav-header  pr-2"  src="{{ asset('icons/box_icon.svg') }}"
                                                                  alt="Каталог">Каталог</a>
                        </li>
                        <li>
                            <a href="#about" class="header__link "><img  class="nav-header pr-2 " src="{{ asset('icons/about_us_icon.svg') }}"
                                                                          alt="О нас">О нас</a>
                        </li>
                        {{--<li class="nav-header">--}}
                            {{--<a href="#" class="header__link"><img  class="nav-header pr-2" src="{{ asset('icons/catalog_icon.svg') }}" alt="Каталог">Каталог для оптовых--}}
                                {{--покупателей</a>--}}
                        {{--</li>--}}
                        <li >
                            <a href="#work" class="header__link"><img class="nav-header pr-2"  src="{{ asset('icons/how_we_work_icon.svg') }}"
                                                                  alt="Как мы работаем?">Как
                                мы работаем?</a>
                        </li>
                        <li>
                            <a href="#contact" class="header__link "><img  class="nav-header pr-2" src="{{ asset('icons/contact_icon.svg') }}"
                                                                          alt="Контакты">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>
<div class="content">

</div>


@push('scripts')
    <script type="text/javascript">
        window.addEventListener("scroll", function () {
            let header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.header__burger').click(function (event) {
                $('.header__burger,.header__menu,header').toggleClass('active');
                $('body').toggleClass('lock');
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.header__list').click(function (event) {
                $('.header__burger,.header__menu,header').removeClass('active');
                $('body').removeClass('lock');
            });

        });
    </script>

@endpush
