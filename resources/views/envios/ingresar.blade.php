  @extends('layouts.app')

  @section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

@if (Auth::user())
  {!! Form::open(['route' => 'envios.store','method'=>'POST'] ) !!}  
     @include('envios.forms.regenvio')
     {!! Form::submit('Guardar',['class'=>'btn btn-primary']); !!}
     
  {!! Form::close() !!}

@endif

                 

  @endsection
