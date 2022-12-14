@extends('layouts.app')
@section('content')


        
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Generar RDI</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-secondary mb-4" href="{{ route('rdis.index') }}"> Volver</a>
            </div>
        </div>
    </div>
    
    
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> hay problemas con las entradas.<br><br>
        <ul>
           @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
           @endforeach
        </ul>
      </div>
    @endif
    
    {!! Form::open(array('route' => 'rdis.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Id projecto:</strong>
            {!! Form::select('id_proyect',$proyects,[], array('class' => 'form-control','multiple')) !!}
        </div>
        
    </div>

    {{-- el Form::text (bla bla) es para hacer un ID --}}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Remitente:</strong>        
            {!! Form::text('name_sender',$myname, array('placeholder' => 'Juan','class' => 'form-control','readonly')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Destinnatario:</strong>
            {!! Form::select('name_recipient',$users,[], array('class' => 'form-control','multiple')) !!}
            </select>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Asunto:</strong>        
            {!! Form::text('subject', null, array('placeholder' => 'Requisito plano','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Especialidad:</strong>        
            {!! Form::select('specialization',$sps,[], array('class' => 'form-control','multiple')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contenido:</strong>
            {!! Form::textarea('content', null, array('placeholder' => '','class' => 'form-control','id'=>'editor')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Estado:</strong>
            {!! Form::text('status','A', array('class' => 'form-control','readonly')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-outline-success">Crear</button>
    </div>
</div>
{!! Form::close() !!}
    
    
    <p class="text-center text-primary"><small>Sistema Comunicacional RDI</small></p>
    
 {{-- npm install --save @ckeditor/ckeditor5-build-classic --}}

@endsection