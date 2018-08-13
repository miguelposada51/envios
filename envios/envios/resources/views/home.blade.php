@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MENU PRINCIPAL</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <li>
                    {!! link_to_route('envios.create', $title = 'Ingresar Envio', $attributes = ['class'=>'btn btn-primary']); !!}
                    </li>
                    <li>
                    {!! link_to_route('envios.index', $title = 'Listar', $attributes = ['class'=>'btn btn-primary']); !!}
                    </li>
                     <li>
                    {!! link_to_route('envios.show', $title = 'Buscar', $attributes = ['class'=>'btn btn-primary']); !!}
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
