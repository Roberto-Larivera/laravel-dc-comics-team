@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Tutti i prodotti</h1>

                <a href="{{ route("comics.create") }}" class="btn btn-success">Crea prodotto</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Price</th>
                            <th scope="col">Tipo</th>
                        </tr>
                    </thead>
                    @foreach ($comics as $comic)
                        <th scope="row"{{ $comic->id }}></th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a href="{{ route("comics.show", $comic->id) }}" class="btn btn-primary">Vedi</a>
                            <a href="{{ route("comics.show", $comic->id) }}" class="btn btn-warning">Aggiorna</a>
                        <form action="{{ route ("comics.destroy", $comic->id) }}" method="POST">
                            @csrf

                            @method("DELETE")
                            <input type="submit" value="Cancella">
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection