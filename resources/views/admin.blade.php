<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>




</head>
<body>
    @include('admin.head')
    <main class="container">
        @yield('content')
    </main>
    @include('admin.footer')
</body>

<script src="//cdn.rawgit.com/fdaciuk/ajax/v3.0.4/dist/ajax.min.js"></script>
<script src="/js/admin_custom.js"></script>
<script type="text/javascript">


        $(function () {
            $('.ckeditor,#ckeditor').summernote({
                height: 250,
                fontNamesIgnoreCheck: ["Roboto"],
                fontNames: ["Roboto","Arial", "Arial Black", "Comic Sans MS", "Courier New",
                    "Helvetica Neue", "Helvetica", "Impact", "Lucida Grande",
                    "Tahoma", "Times New Roman", "Verdana"],
            });
        });







</script>

</html>
