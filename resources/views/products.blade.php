@extends('layouts.plantillaPadre')
@section('root')

<h1>Seccion  products</h1>

<ul>
    @for ($i = 0; $i<10; $i++ )
        <li>el valor del cont es {{$i}}</li>
    @endfor
</ul>

@endsection
