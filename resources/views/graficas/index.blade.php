@extends('base')
@section('title', 'Noticias')
@section('body')
    <div class="row my-5">
        <div class="col-12 col-md-6">
            {{-- Chart 1 Tickets by status --}}
            <div style="width: 25rem; height: 25rem">
                <h3 class="text-center fs-4">Servicios por area</h3>
                <canvas id="services" style="width: inherit; height: inherit;"></canvas>
            </div>
        </div>

        <div class="col-12 col-md-6">
            {{-- Chart 2 Tickets by cities --}}
            <div style="width: 25rem; height: 25rem">
                <h3 class="text-center fs-4">Productos stock</h3>
                <canvas id="products" style="width: inherit; height: inherit;"></canvas>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ @asset('js/graficas/index.js') }}"></script>
@endpush
