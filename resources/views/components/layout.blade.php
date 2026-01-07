<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Laravel 2</title>
            <link rel="stylesheet" href="/style.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>