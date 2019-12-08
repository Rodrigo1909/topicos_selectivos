<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .tinytitle {
                font-size: 24px;
            }

            .subtitle {
                font-size: 34px;
            }

            .title {
                font-size: 84px;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            form .inputs {
                display: flex;
                flex-direction: column;
            }

            .inputs .row {
                margin-bottom: 10px;
            }

            a {
                text-decoration: none;
            }

            input[type="submit"] {
                outline: 0;
                background-color: #55aed6;
                color: white;
                padding: 5px 7px;
                border-radius: 6px;
                font-weight: bold;
            }

            .cancelar {
                outline: 0;
                background-color: #d56d28;
                color: white;
                padding: 5px 7px;
                border-radius: 6px;
            }
        </style>
    </head>
    <body>
        <div class="container full-height">
            <div class="content">
                <form method="POST" action="/actualizar/{{$record->id}}">
                    @csrf
                    @method('POST')

                    <div class="inputs">
                        <h2>Editar</h2>

                        <div class="row">
                            <label for="nombre">Nombre</label>
                            <input
                                required
                                value="{{$record->nombre}}"
                                name="nombre"
                                id="nombre"
                                type="text"
                                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]*$"
                            />
                        </div>

                        <div class="row">
                            <label for="apellidoP">Apellido Paterno</label>
                            <input
                                required
                                value="{{$record->apellidoP}}"
                                name="apellidoP"
                                id="apellidoP"
                                type="text"
                                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]*$"
                            />
                        </div>

                        <div class="row">
                            <label for="apellidoM">Apellido Materno</label>
                            <input
                                required
                                value="{{$record->apellidoM}}"
                                name="apellidoM"
                                id="apellidoM"
                                type="text"
                                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]*$"
                            />
                        </div>
                        
                        <div class="row">
                            <label for="edad">Edad</label>
                            <input
                                required
                                value="{{$record->edad}}"
                                name="edad"
                                id="edad"
                                type="text"
                                pattern="^[0-9]*"
                            />
                        </div>

                        <div class="row">
                            <label for="correo_electronico">Correo electrónico</label>
                            <input
                                required
                                value="{{$record->correo_electronico}}"
                                name="correo_electronico"
                                id="correo_electronico"
                                type="email"
                            />
                        </div>
                    </div>

                    <div class="acciones">
                        <input type="submit" value="Guardar" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
