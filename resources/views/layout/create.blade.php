@extends('layout.layout')

@section('content')

    {!! Form::open(['url' => 'post/store']) !!}
    <label>Nombre</label>
    {!! Form::text('title', '', ['placeholder' => 'guapi']) !!}
    <br>
    <label>CIF</label>
    {!! Form::text('title', '', ['placeholder' => 'guapi']) !!}
    <br>
    <label>Dirección</label>
    {!! Form::text('title', '', ['placeholder' => 'guapi']) !!}
    <br>
    <label>Población</label>
    {!! Form::text('title', '', ['placeholder' => 'guapi']) !!}
    <br>
    <label>Teléfono</label>
    {!! Form::text('title', '', ['placeholder' => 'guapi']) !!}
    <br>
    <label>Correo electrónico</label>
    {!! Form::text('title', '', ['placeholder' => 'example@example.com']) !!}
    <br>
    <label>Sector</label>
    {!! Form::radio('sector', 'primario' ) !!}
    <label>Sector</label>
    {!! Form::radio('sector', '', ['name' => 'sector'] ) !!}
    <label>Sector</label>
    {!! Form::radio('title', '', ['name' => 'sector'] ) !!}
    <br>
    <label>Teléfono</label>
    {!! Form::text('title', '', ['placeholder' => 'guapi']) !!}
    <br>
    <label>Teléfono</label>
    {!! Form::text('title', '', ['placeholder' => 'guapi']) !!}
    <br>
    <label>Teléfono</label>
    {!! Form::text('title', '', ['placeholder' => 'guapi']) !!}
    <br>
    <label>Teléfono</label>
    {!! Form::text('title', '', ['placeholder' => 'guapi']) !!}
    <br>
    <label>Teléfono</label>
    {!! Form::text('title', '', ['placeholder' => 'guapi']) !!}
    <br>
    <br>
    <br>
    <label>Body</label>
    {!! Form::textarea('body', '') !!}
    <br>
    {!! Form::submit('Save post') !!}
    {!! Form::close() !!}
@endsection
