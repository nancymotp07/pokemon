@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pókedex</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table id="pokedex" class="table table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <th>Más</th>
                        </tr>
                        @foreach ($pokemones as $pokemon)
                        
                        <tr>
                            <td>{{ $pokemon->name }}</td>
                            <td><a href="{{ url('detalle/'. ($loop->index+1) )}}" class="btn">Ir </a></td>
                        </tr>
                        
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
