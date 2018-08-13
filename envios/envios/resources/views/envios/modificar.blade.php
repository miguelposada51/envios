@extends('layouts.app')

@section('content')
@if (Auth::user())
 {!! Form::model($envios,['route' => ['envios.update',$envios->id],'method'=>'PUT'] ) !!}  
    @include('envios.forms.regenvio')
     {!! Form::submit('Modificar',['class'=>'btn btn-primary']); !!}
     
  {!! Form::close() !!}
  @endif
@endsection
