@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    {{ $brand }}
                </h1>
                <ul class="text-center">
                    @foreach ($dresses as $dress)
                        <li>{{ $dress->Modello }}</li>
                        <li>{{ $dress->Colore }}</li>
                        <li>{{ $dress->Taglia }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
