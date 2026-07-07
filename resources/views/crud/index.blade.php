<!-- LLAMANDO PLANTILLA PRINCIPAL -->.
@extends ("layouts.main")

    <!-- DEFINIENDO CONTENIDO DE SECCION -->.
    @section("contenido")
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <h2>Mi Helpdesk</h2>
                    <!-- BOTON DE CREAR NUEVO TICKET -->.
                    <a href="{{route("ticket.create")}}" class="btn btn-primary">Nuevo ticket</a>
                    <hr>
                    <!-- TABLA DE VISTA PRINCIPAL -->.
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <!-- CAMPOS DE LA TABLA -->.
                                <td>ID Ticket</td>
                                <td>Fecha</td>
                                <td>Solicitante</td>
                                <td>Sección</td>
                                <td>Area</td>
                                <td>Categoria</td>
                                <td>Atendido por</td>
                                <td>Estatus</td>
                                <td>Ver</td>
                                <td>Editar</td>
                                <td>Eliminar</td>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection 