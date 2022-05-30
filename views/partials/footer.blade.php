@inject('menuService', 'Modules\Menu\Services\MenuService')
<footer>
    <div class="r-footer">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="r-footer-block">
                        <img src="{{ Theme::url('images/logo/logo-r.svg') }}" class="d-block img-fluid" alt="{{ setting('theme::company-name') }}">
                        <p>@setting('theme::phone')</p>
                        <p>@setting('theme::address')</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="r-footer-block">
                        <div class="r-footer-widget r-footer-phone">
                            <span><i class="fa fa-phone"></i> MÜŞTERİ HİZMETLERİ</span>
                            <h5>{!! setting('theme::phone') !!}</h5>
                        </div>
                        <div class="r-footer-widget r-footer-nav">
                            <h6>{!! $menuService->title("corporate") !!}</h6>
                            <nav>
                                <nav>
                                    @menu('corporate', \Themes\Symbol\Presenter\FooterMenuLinksPresenter::class)
                                </nav>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="r-footer-block">
                        <div class="r-footer-widget r-footer-phone">
                            <span><i class="fa fa-mobile-phone"></i> 7/24 DESTEK HATTI</span>
                            <h5>{!! setting('theme::mobile') !!}</h5>
                        </div>
                        <div class="r-footer-widget r-footer-nav">
                            <h6>{!! $menuService->title("services") !!}</h6>
                            <nav>
                                <nav>
                                    @menu('services', \Themes\Symbol\Presenter\FooterMenuLinksPresenter::class)
                                </nav>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="r-footer-block">
{{--                        <div class="r-footer-widget r-footer-map">--}}
{{--                            <a target="_blank" href="https://www.google.com/maps/dir/Current+Location/{{ setting('contact::contact-map-lat') }},{{ setting('contact::contact-map-lng') }}"> <img src="{{ Theme::url('images/icon-footer-map.png') }}" class="icon" alt=''/> Yol Tarifi Al</a>--}}
{{--                        </div>--}}
                        <div class="r-footer-widget r-footer-nav">
                            <h6>{!! $menuService->title("footer-link-3") !!}</h6>
                            <nav>
                                @menu('footer-link-3', \Themes\Symbol\Presenter\FooterMenuLinksPresenter::class)
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix r-footer-strip r-footer-bottom">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        {!! trans('themes::theme.footer.copyrights', [
                                'url'=>'https://www.ugmarackiralama.com.tr',
                                'company'=>setting('theme::company-name')])
                        !!}
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    @include('partials.components.socials')
                </div>
            </div>
        </div>
    </div>
</footer>
