
<div class="card" style="width: 18rem;">

    <img src="https://picsum.photos/200" class="card-img-top" alt="foto libro">
    
    <div class="card-body">
        <h5 class="card-title">{{$book['titolo']}}</h5>
    </div>

    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$book['autore']}}</li>
        <li class="list-group-item">{{$book['prezzo']}}</li>
    </ul>

    <div class="card-body">
        <a href="{{route('dettaglio_libri_', ["id"=>$book["id"]])}}" class="card-link">dettaglio</a>
    </div>

</div>