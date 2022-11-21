@extends('sidebar')
@section('title', 'Cables estructurados')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Productos</h1>
        </div>
    </div>

    <div class="row">
        @foreach ($productos as $producto)
            <div class="col-12 col-md-4">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('storage/images/productos/' . $producto->image) }}" alt="">
                    <label for="">Precio ${{ number_format($producto->price, 2) }}</label>
                    <a href="{{ route('producto_pdf.get', $producto->id) }}">Ficha tecnica</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
