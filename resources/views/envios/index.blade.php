@extends('layouts.app')

@if(session()->has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
 <button type="button" class="close" data-dismiss="alert" aria-label="close">
 	<span aria-hidden="true">&times;</span>
 	{!! session()->get('mensaje') !!}
 </button>	
</div>
@endif

@section('content')
@if (Auth::user())
    <!-- The Current User Can Update The Post -->
    

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre Remitente</th>
		<th scope="col">Documento Remitente</th>
		<th scope="col">Nombre Destinatario</th>
		<th scope="col">Documento Destinatario</th>
		<th scope="col">Tipo Envio</th>
		<th scope="col">Descripcion</th>
		<th scope="col">Estado Envio</th>
		<th scope="col">Fecha Envio</th>
		<th scope="col">Fecha Recibido</th>
		<th scope="col">Departameto Origen</th>
		<th scope="col">Departameto Destino</th>
		<th scope="col">Municipio Origen</th>
		<th scope="col">Municipio Destino</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($envios as $envio)
	   <tbody>
	   	  <td>{!! $envio->user_envia_nombre !!}</td>
	   	  <td>{!! $envio->user_envia_id !!}</td>
	   	  <td>{!! $envio->user_recibe_nombre !!}</td>
	   	  <td>{!! $envio->user_recibe_id !!}</td>
	   	  <td>{!! $envio->tipo_envio_desc !!}</td>
	   	  <td>{!! $envio->descripcion !!}</td>
	   	  <td>{!! $envio->estado_envio !!}</td>
	   	  <td>{!! $envio->fecha_envio !!}</td>
	   	  <td>{!! $envio->fecha_recibido !!}</td>
	   	  <td>{!! $envio->dep_origen_id !!}</td>
	   	  <td>{!! $envio->dep_destino_id !!}</td>
	   	  <td>{!! $envio->muni_origen_id !!}</td>
	   	  <td>{!! $envio->muni_destino_id !!}</td>
	   	  <td>{!! link_to_route('envios.edit', $title = 'Editar', $parameters = [$envio->id], $attributes = ['class'=>'btn btn-primary']); !!}</td>
	   </tbody>
 	@endforeach
    </tr>
   
  </tbody>
</table>
@endif
   

@endsection
