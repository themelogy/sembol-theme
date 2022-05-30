@stack('css-stack')
@stack('css-inline')

<!-- JQUERY:: JQUERY.JS -->
{!! Theme::script("js/jquery.min.js") !!}

<!-- JQUERY:: APPEAR.JS -->
{!! Theme::script("js/plugins/appear/appear.js") !!}

<!-- JQUERY:: COUNTER.JS -->
{!! Theme::script("js/plugins/counter/jquery.easing.min.js") !!}
{!! Theme::script("js/plugins/counter/counter.min.js") !!}

<!-- JQUERY:: BOOTSTRAP.JS -->
{!! Theme::script("js/tether.min.js") !!}
{!! Theme::script("js/bootstrap.min.js") !!}

<!-- JQUERY:: DATEPICKER.JS -->
{!! Theme::script("js/plugins/datepicker/moment-with-locales.min.js") !!}
{!! Theme::script("js/plugins/datepicker/moment-timezone.js") !!}
{!! Theme::script("js/plugins/datepicker/bootstrap-datepicker.js") !!}

<!-- JQUERY:: PLUGINS -->
{!! Theme::script("js/plugins/owl/owl.carousel.min.js") !!}
{!! Theme::script("js/plugins/lightcase/lightcase.js") !!}
{!! Theme::script("js/plugins/owl/owl.carousel2.thumbs.js") !!}

<!-- JQUERY:: CUSTOM.JS -->
<script src="{{ mix('/themes/sembol/js/custom.min.js') }}"></script>


@stack('js-stack')
@stack('js-inline')
