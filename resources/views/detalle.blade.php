@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{$pokemon->name}}</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Datos</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <th>Altura</th>
                            <th>Peso</th>
                            <th>Experiencia Base</th>
                            <th>Habilidades</th>
                        </tr>
                        <tr>
                            <td>{{$pokemon->name}}</td>
                            <td>{{$pokemon->height}}</td>
                            <td>{{$pokemon->weight}}</td>
                            <td>{{$pokemon->base_experience}}</td>
                            <td>
                                <ul>
                                @foreach ($pokemon->abilities as $abilities)
                                    <li>{{$abilities->ability->name}}</li>
                                @endforeach
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <a href="{{url('home')}}">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
