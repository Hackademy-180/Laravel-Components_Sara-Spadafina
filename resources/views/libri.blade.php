<x-layout>
    <head class="container my-5">
        <section class="row">
            <article class="col-12 text-center">
                <h1>i miei libri</h1>
            </article>
        </section>
    </head>
    <main class="container-fluid">
        <section class="row">
            @foreach($books as $book)
                <article class="col-12 col-md-4">


                    <x-card :book="$book"/>
                  

                </article>
            
            @endforeach
        </section>
    </main>
</x-layout>