@extends ("layouts.main")

    @section("contenido")
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <h2>Mi Helpdesk</h2>
                    <a href="{{route("ticket.create")}}" class="btn btn-primary">Nuevo ticket</a>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
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