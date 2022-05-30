<header id="header">
    <div class="r-header r-header-inner r-header-strip-03">
        <div class="r-header-strip">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xl-4 col-lg-4 col-md-8 col-sm-12 col-xs-12">
                        <div class="r-logo">
                            <a href="{{ route('homepage') }}" class="d-inline-block"><img src="{{ Theme::url('images/logo/logo-wb.svg') }}" class="img-fluid d-block" alt="{{ setting('theme::company-name') }}" style="max-height:60px;"></a>
                        </div>
                        <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">

                        <div class="r-nav-section float-right">
                            <nav>
                                {!! Menu::render('header', \Themes\Symbol\Presenter\HeaderMenuPresenter::class) !!}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('header.title')
    </div>
</header>
