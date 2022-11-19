<form id="formulario">
    <div class="row">
        <div class="col-xs-2">
            <label for="empresa" style="color: white">Empresa:</label>
        </div>
        <div class="col-xs-8">
            <input class="form-control" type="text" name="empresa" id="empresa" placeholder="Empresa..."
                required="required">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-2">
            <label for="nombre" style="color: white">Nombre:</label>
        </div>
        <div class="col-xs-8">
            <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre..."
                required="required">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-2">
            <label for="telefono" style="color: white">Teléfono:</label>
        </div>
        <div class="col-xs-8">
            <input class="form-control" type="tel" name="telefono" id="telefono" pattern="[0-9]{10}" maxlength="10"
                placeholder="Teléfono..." required="required">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-2">
            <label for="correo" style="color: white">Correo:</label>
        </div>
        <div class="col-xs-8">
            <input class="form-control" type="email" name="email" id="email" placeholder="E-mail..."
                required="required">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-2">
            <label for="mensaje" style="color: white">Mensaje:</label>
        </div>
        <div class="col-xs-8">
            <textarea class="form-control" name="tarea" id="tarea" cols="50" rows="4"
                placeholder="Mensaje..."></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2">

        </div>
        <div class="col-xs-8">
            <br>
            <div class="g-recaptcha" data-sitekey="6LfH4u0UAAAAAP2iM5RpHHbBYMk1sMkmqVzg-6tm" data-theme="light"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2">

        </div>
        <div class="col-xs-8">
            <br>
            <button type="button" class="btn btn-info pull-right" id="btn_correo"
                style="color: white; background-color: #0a83bf">Enviar Correo</button>
        </div>
    </div>
</form>
