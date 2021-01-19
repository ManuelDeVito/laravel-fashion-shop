@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    {{ $brand }}
                </h1>
                <div class="row">
                    @foreach ($dresses as $key => $dress)
                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-header text-center">
                                    Articolo {{ $key + 1 }}
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">{{ 'Modello: ' .$dress->Modello }}</li>
                                    <li class="list-group-item">{{ 'Colore: ' .$dress->Colore }}</li>
                                    <li class="list-group-item">{{ 'Taglia: ' .$dress->Taglia }}</li>
                                    <li class="list-group-item">{{ 'Prezzo: ' .$dress->Prezzo .'€' }}</li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
