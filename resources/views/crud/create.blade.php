@extends("layouts.main");

@section("contenido")
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <h2>Nuevo ticket</h2>
                @csrf
                <form action="" class="needs-validation" novalidate method="post" >


                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="empleado" class="formn-label">¿Quien lo solicito? *</label>
                                <input type="text" name="nombre_empleado" id="nombreEmpleado" class="form-control" placeholder="Buscar..." required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="alumno" class="formn-label">Matricula Alumno </label>
                                <input type="text" name="matricula" id="matricula" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="Via de solicitud">Medio de solicitud *</label>
                                <select class="form-select" id="viaSolicitud" required>
                                <option selected>Selecciona una opción</option>
                                <option value="1">Celular | Smartphone</option>
                                <option value="2">Sitio web</option>
                                <option value="3">Teléfono | Phone</option>
                                <option value="4">Radio</option>
                                <option value="5">Presencial | In person</option>
                                <option value="6">Correo | Email</option>
                                <option value="7">Otro | Another</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="Via de solicitud">Sección *</label>
                                <select class="form-select" id="viaSolicitud" required>
                                    <option selected>Selecciona una opción</option>
                                    <option value="1">Preescolar | Kinder</option>
                                    <option value="2">Primaria | Elementary School</option>
                                    <option value="3">Secundaria | Middle School</option>
                                    <option value="4">Preparatorio | High School</option>
                                    <option value="5">Triángulo | Executive suites</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="Via de solicitud">Tipo de solicitud *</label>
                                <select class="form-select" id="viaSolicitud" required>
                                    <option selected>Selecciona una opción</option>
                                    <option value="1">Requerimiento | Requeriment</option>
                                    <option value="2">Asesoramiento | Assistance</option>
                                    <option value="3">Incidencia | Incidence</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="Via de solicitud">Area *</label>
                                <select class="form-select" id="viaSolicitud" required>
                                <option selected>Selecciona una opción</option>
                                <option value="celular">Celular | Smartphone</option>
                                <option value="web">Sitio web</option>
                                <option value="telefono">Teléfono | Phone</option>
                                <option value="radio">Radio</option>
                                <option value="persona">Presencial | In person</option>
                                <option value="correo">Correo | Email</option>
                                <option value="otroMedio">Otro | Another</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="empleado" class="formn-label">Categoría*</label>
                                <input type="text" name="nombre_empleado" id="nombreEmpleado" class="form-control" placeholder="Buscar..." required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="alumno" class="formn-label">Responsable de area</label>
                                <input type="text" name="matricula" id="matricula" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="Via de solicitud">Atendido por *</label>
                                <select class="form-select" id="viaSolicitud" required>
                                <option selected>Selecciona una opción</option>
                                <option value="celular">Celular | Smartphone</option>
                                <option value="web">Sitio web</option>
                                <option value="telefono">Teléfono | Phone</option>
                                <option value="radio">Radio</option>
                                <option value="persona">Presencial | In person</option>
                                <option value="correo">Correo | Email</option>
                                <option value="otroMedio">Otro | Another</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descripción</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Solución</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="empleado" class="formn-label">Evidencia*</label>
                        <input type="text" name="nombre_empleado" id="nombreEmpleado" class="form-control" placeholder="Buscar..." required>
                    </div>

                    <button class="btn btn-success mt-3" type="submit">Guardar</button>

                </form>
            </div>
        </div>
    </div>
@endsection 