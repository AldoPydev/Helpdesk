@extends("layouts.main");

@section("contenido")
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <h2>Nuevo ticket</h2>
                <!-- Creación de formulario con metodo POST -->
                <form action="" class="needs-validation" novalidate method="post" >
                    @csrf <!-- Genera un campo oculto con el token -->
                    <div class="row">
                        <div class="col">
                            <!-- Campo empleado que solicita -->
                            <div class="mb-3">
                                <label for="empleado" class="formn-label">¿Quien lo solicito? *</label>
                                <input type="text" name="empleado" id="nombreEmpleado" class="form-control" placeholder="Buscar..." required>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Campo matricula alumno -->
                            <div class="mb-3">
                                <label for="alumno" class="formn-label">Matricula Alumno </label>
                                <input type="text" name="alumno" id="matricula" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <!-- Campo medio de solicitud -->
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
                        <!-- Campo matricula alumno -->
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
                            <!-- Campo tipo de solicitud -->
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
                                <!-- Campo Area de apoyo -->
                                <label for="Via de solicitud">Area de apoyo*</label>
                                <select class="form-select" id="viaSolicitud" required>
                                <option selected>Selecciona una opción</option>
                                <option value="1">CMI | Library</option>
                                <option value="2">Deportes | Sport</option>
                                <option value="3">Desarrollo y sistemas | TICs</option>
                                <option value="4">Direccion de nivel | Level Management</option>
                                <option value="5">Enfermería | Nursing</option>
                                <option value="6">Mantenimiento | Maintenance</option>                                
                                <option value="7">Triangulo | Triangle Offices</option>                                
                                <option value="8">Protección civil | Civil Protection</option>                                
                                <option value="9">Seguridad | Security</option>  
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <!-- Campo donde se apoyo -->
                                <label for="Via de solicitud">Lugar de apoyo*</label>
                                <select class="form-select" id="viaSolicitud" required>
                                <option selected>Selecciona una opción</option>
                                <option value="1">Audiovisual | Audiovisual Room</option>
                                <option value="2">Auditorio | Auditorium</option>
                                <option value="3">CMI Preescolar | CMI Preschool</option>
                                <option value="4">CMI Primaria | CMI Elementary School</option>
                                <option value="5">CMI Secundaria | CMI Middle School</option>
                                <option value="6">CMI Preparatoria | CMI High School</option>                               
                                <option value="7">Domo Secundaria | Middle School Dome</option>                                
                                <option value="8">Gimnasio | Gymnasium</option>                                
                                <option value="9">Hall Primaria | Elementary School Hall</option>  
                                <option value="10">Huskiteria | Huskiteria</option>  
                                <option value="11">Laboratorio | Laboratory</option>  
                                <option value="12">Oficina | Office</option>  
                                <option value="13">Patio  | Courtyard</option>  
                                <option value="14">Salón  | Classroom</option>  
                                <option value="15">Wellbicenter | Wellbicenter</option>  
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="empleado" class="formn-label">Categoría*</label>
                                <select class="form-select" id="viaSolicitud" required>
                                <option selected>Selecciona una opción</option>
                                <option value="1">Algebraix | Académico</option>
                                <option value="2">Algebraix | Administrativo</option>
                                <option value="3">Apps COMPAQi</option>
                                <option value="4">Apps Feria Deportiva</option>
                                <option value="5">Apps Microfost</option>
                                <option value="6">Apps Mis Autorizados - Primaria</option>                               
                                <option value="7">Audio</option>                                
                                <option value="8">Cableado (Red, Audio, Video)</option>                                
                                <option value="9">Cámara de seguridad (CCTV)</option>  
                                <option value="10">Correo electrónico </option>  
                                <option value="11">Enlaces de comunicación </option>  
                                <option value="12">Equipo de cómputo</option>  
                                <option value="13">Google (Navegador, Cuenta, Forms, Workspace)</option>  
                                <option value="14">Hardware</option>  
                                <option value="15">Helpdesk</option>  
                                <option value="16">Impresoras / Impresiones</option>
                                <option value="17">Internet (Ethernet / WIFI)</option>
                                <option value="18">Ipad</option>
                                <option value="16">Mosyle</option>
                                <option value="20">Otras aplicaciones </option>
                                <option value="21">Pagina Oficial</option>                               
                                <option value="22">Portal de gastos</option>                                
                                <option value="23">Portal de presupuestos</option>                                
                                <option value="24">PowerBI</option>  
                                <option value="25">Préstamo de equipo</option>  
                                <option value="26">Proyección</option>  
                                <option value="27">Revisión con proveedores</option>  
                                <option value="28">Site</option>  
                                <option value="29">Software</option>  
                                <option value="30">Telefonía</option>  
                                <option value="31">TV</option>  
                                </select>
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
                                <label for="alumno" class="formn-label">Atendido por *</label>
                                <input type="text" name="matricula" id="matricula" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <label for="description">Descripción <span class="fw-bold text-danger required-asterisk">*</span></label>
                        <textarea class="form-control " id="description" name="description" rows="5" style="resize: none;" required=""></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="solution">Solución <small class="text-primary">(Si ya hay una solución)</small></label>
                        <textarea class="form-control " id="solution" name="solution" rows="5" style="resize: none;"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="attachments">Archivos adjuntos</label>
                            <input type="file" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.xls,.xlsx,.xml,.ppt,.pptx,.txt" class="form-control " id="attachments" name="attachments[]" multiple="">
                        </div>
                    </div>

                    <button class="btn btn-success mt-3" type="submit">Guardar</button>

                </form>
            </div>
        </div>
    </div>
@endsection 