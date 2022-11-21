@extends('base')
@section('title', 'Prueba')
@section('body')
    <form id="inicio_sesion_form">
        <div class="row">
            <div class="col-12">
                <label for="">Correo</label>
                <input type="text" name="email" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label for="">Contraseña</label>
                <input type="text" name="password" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
                                    
            <div class="col-md-8 offset-md-2">
                <div class="form-check">
                    <div class="d-flex justify-content-center">
                        <img class="m-3" src="{{ captcha_src() }}">
                    </div>
                    
                    <input type="text" class="form-control bg-light rounded-5" name="captcha">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button class="btn-success" type="button" onclick="login()">Iniciar sesion</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        const login = async () => {
            // URL para iniciar sesion POST
            const url = route('usuario_sesion');
            // Obtener formulario y convertirlo a FormData
            const formulario = document.getElementById('inicio_sesion_form');
            const formData = new FormData(formulario);
            // Establecer metodo y encabezados
            const init = {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': $('#csrf').attr('content'),
                    Accept: 'application/json'
                }
            }
            // Mandar peticion al back
            const req = await fetch(url, init);
            // Checar si la respuesta es un 200
            if (req.ok) {
                window.location.href = route('panel_admin');
                return;
            } else if (req.status == 429) {
                // Obtener respuesta del servidor
                const res = await req.json();
                await Swal.fire({
                    icon: 'error',
                    title: 'ERROR',
                    text: res
                });
                location.reload();
                return;
            }

            Swal.fire({
                icon: 'error',
                title: 'ERROR',
                text: 'Credenciales incorrectas'
            });
        }
    </script>
@endpush
