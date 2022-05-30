{!! seo_helper()->render() !!}
<link rel="shortcut icon" href="{!! Theme::url('images/favicon.png') !!}">
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Poppins:latin-ext']
        }
    });
</script>
{!! Theme::style('css/plugins/datepicker/datepicker.css') !!}
{!! Theme::style('css/icomoon.css') !!}
<link media="all" rel="stylesheet" type="text/css" href="{{ mix('/themes/sembol/css/main.css') }}">
