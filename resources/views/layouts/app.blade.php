<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','taller laravel')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        <nav>
            <a href="{{route('producto.index') }}">
                {{__('messages.products')}}
            </a>
            <a href="{{route('categoria.index') }}">
                {{__('messages.categories')}}
            </a>
            <a href="{{route('articulo.index') }}">
                {{__('messages.articles')}}
            </a>
            <a href="{{route('categoriaBlog.index') }}">
                {{__('messages.blogCategories')}}
            </a>
        </nav>

    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>