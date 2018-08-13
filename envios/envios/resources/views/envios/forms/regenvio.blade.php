<div class="form-group mx-sm-3 mb-2"> 
     {!!  Form::label('user_envia_nombre', 'Nombre Remitente'); !!}
     {!!  Form::text('user_envia_nombre', null, ['placeholder' => 'Ingrese Remitente', 'class' => 'form-control' ,'required' => '', 'maxlength' => "25"]); !!}
    </div>
    <div class="form-group mx-sm-3 mb-2">   
     {!!  Form::label('user_envia_id', 'Documento Remitente'); !!}
     {!!  Form::text('user_envia_id', null, ['placeholder' => 'Ingrese Doc', 'class' => 'form-control' ,'required' => '', 'maxlength' => "25"]); !!}
    </div>  
    <div class="form-group mx-sm-3 mb-2"> 
     {!!  Form::label('user_recibe_nombre', 'Nombre Destinatario'); !!}
     {!!  Form::text('user_recibe_nombre', null, ['placeholder' => 'Ingrese Destinatario', 'class' => 'form-control' ,'required' => '', 'maxlength' => "25"]); !!}  
    </div> 
    <div class="form-group mx-sm-3 mb-2"> 
     {!!  Form::label('user_recibe_id', 'Documento Destinatario'); !!}
     {!!  Form::text('user_recibe_id', null, ['placeholder' => 'Ingrese Documento', 'class' => 'form-control' ,'required' => '', 'maxlength' => "25"]); !!}
   </div>
    <div class="form-group mx-sm-3 mb-2">     
      {!!  Form::label('tipo_envio_desc', 'Tipo Envio'); !!}
      {!!  Form::select('tipo_envio_desc', ['D' => 'Dinero', 'M' => 'Mercancia', 'class' => 'form-control']); !!}
    </div> 
    <div class="form-group mx-sm-3 mb-2"> 
      {!!  Form::label('descripcion', 'Descripcion'); !!}
       {!!  Form::textarea('descripcion', null, ['placeholder' => 'Descripcion', 'class' => 'form-control' , 'cols' => 5, 'rows' =>2, 'required' => '', 'maxlength' => "400"]); !!}
     </div>
     <div class="form-group mx-sm-3 mb-2"> 
       {!!  Form::label('estado_envio', 'Estado Envio'); !!}
       {!!  Form::select('estado_envio', ['B' => 'Bodega', 'R' => 'En Ruta', 'E' => 'Entregado', 'class' => 'form-control']); !!}
     </div>
     <div class="form-group mx-sm-3 mb-2"> 
       {!!  Form::label('fecha_envio', 'Fecha Envio'); !!}
       {!!  Form::date('fecha_envio', \Carbon\Carbon::now()); !!}
     </div>
     <div class="form-group mx-sm-3 mb-2"> 
       {!!  Form::label('fecha_recibido', 'Fecha Recibido'); !!}
       {!!  Form::date('fecha_recibido', \Carbon\Carbon::now()); !!}
     </div>
     <div class="form-group mx-sm-3 mb-2"> 
       {!!  Form::label('dep_origen_id', 'Departameto Origen'); !!}
       {!!  Form::select('dep_origen_id', ['1' => 'Antioquia', '2' => 'Cundinamarca', '3' => 'Caldas']); !!}
     </div>
     <div class="form-group mx-sm-3 mb-2"> 
       {!!  Form::label('dep_destino_id', 'Departameto Destino'); !!}
       {!!  Form::select('dep_destino_id', ['1' => 'Antioquia', '2' => 'Cundinamarca', '3' => 'Caldas']); !!}
     </div>
     <div class="form-group mx-sm-3 mb-2"> 
       {!!  Form::label('muni_origen_id', 'Municipio Origen'); !!}
       {!!  Form::select('muni_origen_id', ['1' => 'Medellin', '2' => 'Bogota', '3' => 'Manizales']); !!}
     </div>
     <div class="form-group mx-sm-3 mb-2"> 
       {!!  Form::label('muni_destino_id', 'Municipio Destino'); !!}
       {!!  Form::select('muni_destino_id', ['1' => 'Medellin', '2' => 'Bogota', '3' => 'Manizales']); !!}
     </div>