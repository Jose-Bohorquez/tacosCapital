    <div class="container mt-5">
        <div class="row">

            <!-- Mapa de Ubicación -->
            <div class="col">
                <h2 class="text-center p-2 m-2">Nuestra Ubiación</h2><br>
                <p class="p-2 m-2">Puedes dar click en el siguiente enlace <a
                        href="https://maps.app.goo.gl/oj1XUBwosqhprwBQ6">Ir a Maps</a> o directamente en el mapa para
                    ser redirigido a Google Maps y todo sera mas facil</p> <br><br>
                <div class="overflow-hidden rounded-5 " style="width: 100%; height: 450px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8063748375757!2d-74.1378660247617!3d4.628606795346133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9d003fd34e39%3A0x3de784bb9fedb59e!2sTACOS%20CAPITAL!5e0!3m2!1ses!2sco!4v1725526609623!5m2!1ses!2sco"
                        allowfullscreen="" loading="lazy" style="border: 0; width: 100%; height: 100%;"></iframe>
                </div>
            </div>

            <!-- Información de Contacto -->
            <div class="col-md-6">
                <div class="m-2 p-2">
                    <h2 class="text-center mb-3">Información de Contacto</h2>
                    <p><strong>Dirección:</strong> Cra 71 C # 5 B 04 - Colombia, Bogotá</p>
                    <p>
                        <strong>Teléfono:</strong>
                        <span id="phone">(+57) 318 876 3377</span>
                        <button class="btn btn-sm btn-outline-primary ms-2" onclick="copyToClipboard('#phone')">Copiar
                            Teléfono</button>
                        <a href="tel:+573188763377" class="btn btn-sm btn-primary ms-2">Llamar</a>
                    </p>
                    <p>
                        <strong>Correo Electrónico:</strong>
                        <span id="email">ivansaso77@hotmail.com</span>
                        <button class="btn btn-sm btn-outline-primary ms-2" onclick="copyToClipboard('#email')">Copiar
                            Correo</button>
                        <a href="mailto:ivansaso77@hotmail.com" class="btn btn-sm btn-primary ms-2">Enviar Correo</a>
                    </p>
                    <p><strong>Horas de Atención:</strong> Lunes a Viernes (24H) </p>
                </div>



                <!-- Formulario de Contacto -->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center mb-3">Envíanos un Mensaje</h2>
                        <form action="/enviar_contacto" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control form-control-sm" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control form-control-sm" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Asunto</label>
                                <input type="text" class="form-control form-control-sm" id="subject" name="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>

            
        </div>


    </div>

    <!-- Incluye Bootstrap JS y Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <!-- Script para copiar al portapapeles -->
    <script>
        function copyToClipboard(elementId) {
            var copyText = document.querySelector(elementId).textContent;
            navigator.clipboard.writeText(copyText).then(function () {
                alert('Texto copiado: ' + copyText);
            }, function (err) {
                console.error('Error al copiar al portapapeles: ', err);
            });
        }
    </script>