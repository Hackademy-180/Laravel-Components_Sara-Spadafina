<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Laravel 2</title>
            
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>

    <body>
        
{{-- navbar --}}
<x-navbar/>
{{-- navbar --}}
{{$slot}}

        <header class="container-fluid">
            <section class="row header align-items-center vh-100">
                <article class="col-12 text-white text-center">
                <h1 class="display-1">Hello, world!</h1>
                </article>
            </section>
        </header>

       
    </body>
</html>