@extends('layouts.app')
@section('content')
@php
    $idColaborador = auth()->user()->idColaborador
@endphp
<main class="container container-main-sections">
    <section class="border rounded px-3 col-md-8 col-sm-11 col-lg-5 mx-auto mt-5 shadow bg-light">
        <h1>Hola Mundo!!</h1>
    </section>
</main>
@endsection