<x-layout>
    <head class="container">
        <section class="row">
            <article class="col-12 text-center">
                <h1>Pagina dettaglio</h1>
            </article>
        </section>
    </head>
    <main class="container">
        <section class="row justity-content-center">
            <article class="col-12 col-md-8">
                <p><span class="fw-bold">Editore: </span>{{$book["editore"]}}</p>
                <p><span class="fw-bold">Descrizione: </span>{{$book["descrizione"]}}</p>
            </article>
        </section>

    </main>
</x-layout>